const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
            green: colors.green,
            red: colors.red,
            orange: colors.orange,
            blue: colors.blue,
            pink: colors.pink,
            purple: colors.purple,
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
