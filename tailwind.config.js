/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        screens: {
            "3xl": "1920px",
            "4xl": "2560px",
            "5xl": "3840px",
        },
        colors: {
            blue: "#37387D",
            purple: "#DBCDE3",
            "light-blue": "#CBE5E7",
            "dark-blue": "#262757"
        }
    },
  },
  plugins: [],
}
