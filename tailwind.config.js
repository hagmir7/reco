/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js'),
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php',
    ],
  theme: {
    extend: {
        colors: {
            primary: {
                '50': '#feffe7',
                '100': '#fbffc1',
                '200': '#fcff86',
                '300': '#fffb41',
                '400': '#ffee0d',
                '500': '#ffe000',
                '600': '#d1a500',
                '700': '#a67702',
                '800': '#895c0a',
                '900': '#744b0f',
                '950': '#442804',
            },
        },
    },
  },
  plugins: [],
}

