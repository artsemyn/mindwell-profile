import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': '640px',
            'md': '900px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        },
        extend: {
            colors: {
                'mindwell-orange': '#ea5b37',
                'mindwell-blue': '#0c1e9f',
                'mindwell-gray': '#dfd6d6',
                'mindwell-yellow': '#ffde59',
            },
            fontFamily: {
                sans: ['Questrial', ...defaultTheme.fontFamily.sans],
                'spartan': ['"League Spartan"', 'sans-serif'],
                'questrial': ['Questrial', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};