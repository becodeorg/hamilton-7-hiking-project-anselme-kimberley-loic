/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "app/views/**/*.{html,js,view.php,php}",
      "public/scripts/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'brown-hike': '#91563B',
        'green-hike': '#8CD572',
        'yellow-hike': '#FFBE08',
      },
      animation: {
        comeIn: 'comeDown 0.4s ease-in-out',
      },
      keyframes: {
        comeDown: {
          '0%': { transform: 'translateY(-200px)', opacity: '0' },
          '100%': { transform: 'translateY(0px)', opacity: '100%' },
        },
      },
    },
  },
  plugins: [],
}
