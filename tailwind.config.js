/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "white-green": "#fafffb",
                "black-blue": "#394146",
                "green-gd": "#78ad87",
                "grey-gd": "#8d8d8d",
                "black-gd": "#263238",
                "lg-green": "#E6FFED",
                "grey-gh": "#BBBDBC",
            },
            width: {
                128: "32rem", // Add custom width, e.g., 32rem
                192: "48rem", // Add custom width, e.g., 48rem
                256: "64rem", // Add custom width, e.g., 64rem
                512: "90rem",
            },
        },
    },
    plugins: [],
};
