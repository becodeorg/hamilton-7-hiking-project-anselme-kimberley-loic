<div class="w-full p-6">
    <div class="flex w-6/12 mr-auto ml-auto justify-between mb-6">
        <a href="#"><img class="w-6 mr-4" src="assets/images/edit-svgrepo-com.svg"></a>
        <a href="#"><img class="w-6" src="assets/images/delete-svgrepo-com.svg"></a>
    </div>
    <h2 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-brown-hike to-green-hike"><?= $hike['name']?></h2>
    <img class="w-6/12 mr-auto ml-auto rounded-lg mt-4 mb-6" src="https://images.unsplash.com/photo-1520962880247-cfaf541c8724?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3132&q=80" alt="pic hike"/>
    <div class="w-6/12 mr-auto ml-auto">
        <div class="flex flex-col">
            <span class="mb-3">tags :</span>
            <p class="mb-3">Description : <?= $hike['description']?></p>
            <p class="mb-3">Distance in meters : <?= $hike['distance'] ?>m</p>
            <p class="mb-3">Elevation in meters : <?= $hike['elevationGain'] ?>'</p>
            <p class="mb-3">Duration in minutes : <?= $hike['duration'] ?>'</p>
            <p class="mb-3">Last update : <?= $hike['dateUpdate'] ?></p>
        </div>
    </div>

</div>
