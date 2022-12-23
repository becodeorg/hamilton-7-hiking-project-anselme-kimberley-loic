<?php

declare(strict_types=1);

class AuthController
{
    private Auth $authModel;

    public function __construct()
    {
        $this->authModel = new Auth();
    }

    public function register(array $input): void
    {
        try {
            if (empty($input['nickname']) || empty($input['email']) || empty($input['password']) || empty($input['firstname']) || empty($input['lastname'])) {
                throw new Exception('Form data not validated.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        try {
            if ($input['password'] !== $input['password_confirm']) {
                throw new Exception("Password must match");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        $nickname = htmlspecialchars($input['nickname']);
        $firstname = htmlspecialchars($input['firstname']);
        $lastname = htmlspecialchars($input['lastname']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);

        $this->authModel->create($nickname, $email, $password, $firstname, $lastname);

        $uid = $this->authModel->getLastInsertId();

        $_SESSION['user'] = [
            'uid' => $uid,
            'nickname' => $nickname,
            'email' => $email
        ];
        //mail($email, "Welcome to HIKING", "You have successfully signed up!");

        http_response_code(302);
        header('location: /');
    }

    public function showRegistrationForm(): void
    {
        include 'app/views/layout/head.view.php';
        include 'app/views/Registration.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function login(array $input): void
    {
        try {
            if (empty($input) || empty($input['nickname']) || empty($input['password'])) {
                throw new Exception('Form data not validated.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        // Sanitize/validate input
        $nickname = htmlspecialchars($input['nickname']);
        $password = htmlspecialchars($input['password']);

        $user = $this->authModel->find($nickname);

        try {
            if (!password_verify($password, $user['password'])) {
                throw new Exception("Failed login attempt : wrong password");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        $_SESSION['user'] = [
            'nickname' => $user['nickname'],
            'email' => $user['email'],
            'uid' => $user['uid']
        ];

        // Then, we redirect to the home page
        http_response_code(302);
        header('location: /');
    }

    public function showLoginForm(): void
    {
        include 'app/views/layout/head.view.php';
        include 'app/views/Login.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function logout(): void
    {
        unset($_SESSION['user']);
        header('location: /');
    }

    public function showProfil(int $uid): void
    {
        $user = $this->authModel->findId($uid);
        include 'app/views/layout/head.view.php';
        include 'app/views/Profil.view.php';
        include 'app/views/layout/footer.view.php';
    }

    public function showUpdateProfil(int $uid): void
    {
        $user = $this->authModel->findId($uid);
        include 'app/views/layout/head.view.php';
        include 'app/views/UpdateProfil.view.php';
        include 'app/views/layout/footer.view.php';
    }
    public function updateProfil(array $input): void
    {
        try {
            if (empty($input['nickname']) || empty($input['email']) || empty($input['password']) || empty($input['firstname']) || empty($input['lastname'])) {
                throw new Exception('Form data not validated.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        try {
            if ($input['password'] !== $input['password_confirm']) {
                throw new Exception("Password must match");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        $uid = $_SESSION['user']['uid'];
        $nickname = htmlspecialchars($input['nickname']);
        $firstname = htmlspecialchars($input['firstname']);
        $lastname = htmlspecialchars($input['lastname']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);

        $this->authModel->update($uid, $email, $nickname, $firstname, $lastname, $password);


        http_response_code(302);
        header('location: /profil');

    }
}