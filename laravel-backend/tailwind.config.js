const defaultTheme = require('tailwindcss/defaultTheme');
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class', // Habilita o modo escuro baseado em classes
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                body: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    "50": "#f7fee7",
                    "100": "#ecfccb",
                    "200": "#d9f99d",
                    "300": "#bef264",
                    "400": "#a3e635",
                    "500": "#84cc16",
                    "600": "#65a30d",
                    "700": "#4d7c0f",
                    "800": "#3f6212",
                    "900": "#365314",
                    "950": "#1a2e05",
                },
                fundo: "#eef8ee",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'], // Adiciona variantes para o estado "active"
        },
    },
    content: [
        './app/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
