import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light-dark': '#344767'
            },
            backgroundImage: {
                'gradient-dark-gray': 'linear-gradient(310deg,#141727,#3a416f)',
                'gradient-takamori': 'linear-gradient(310deg, #43968d, #5cf8bb)'
            }
        },

    },

    plugins: [forms],
};
