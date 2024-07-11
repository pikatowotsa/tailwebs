/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.tail.php",
    "./resources/**/*.component.php",
    "./resources/**/*.js",
    './node_modules/preline/dist/*.js',
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'),
    require('flowbite/plugin')
  ],
}

