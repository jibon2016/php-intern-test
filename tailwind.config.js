/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    colors : {
          mint : '#E3E9FF',
        heading: '#AF7EEB',
        red: '#E23C2F',
        white: '#FFFFFF'
      },
    extend: {},
  },
  plugins: [],
}

