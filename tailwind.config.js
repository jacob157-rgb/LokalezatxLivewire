// import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            sans: ["Poppins", "sans-serif"],
        },
        extend: {
            colors: {
                primary: "#aa0225",
                secondary: "#c8c8c8",
                tertiary: "#eaeef6",
                edit: "#5b9dff",
            },
            backgroundImage: {
                'peach' : 
                'radial-gradient(at right bottom, rgb(254, 202, 202, 0.8), rgb(252, 165, 165, 0.6), rgb(254, 240, 138, 0.4))'
            },
        },
    },

    plugins: [forms, typography],
};
