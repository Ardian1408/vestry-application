/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        keyframes: {
            'fade-in-down': {
                '0%': {
                    opacity: '0',
                    transform: 'translateY(-20px)'
                },
                '100%': {
                    opacity: '1',
                    transform: 'translateY(0)'
                },
            }
        },
        animation: {
            'fade-in-down': 'fade-in-down 1s ease-out'
        },
        fontFamily: {
            roboto: ['Roboto', 'sans-serif'],
            righteous: ['Righteous', 'sans-serif'],
            sans: ['Figtree', 'sans-serif'],
            fold: ['Foldit', 'sans-serif']
        }
    },
},
  plugins: [],
}