const colors = require('tailwindcss/colors');

module.exports = {
  purge: {
    mode: 'layers',
    content: ['./*.php', '../JwR-Alea/*.php'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
