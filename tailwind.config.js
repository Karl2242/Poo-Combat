/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.php", 
    "./src/**/*.php",
    "./public/**/**/*.php",
    ],
  theme: {
    extend: {
      'backgroundImage': {
        'main': "./assets/image/decor-main.gif"
      }
    },
  },
  plugins: [],
}

