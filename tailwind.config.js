import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.css',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'sans-serif'],
            },
            colors: {
                wine: {
                    50: '#fdf3f3',
                    100: '#fce4e4',
                    200: '#fbcdcd',
                    300: '#f7aaaa',
                    400: '#f07979',
                    500: '#e54e4e',
                    600: '#d23030',
                    700: '#b62626',
                    800: '#922222',
                    900: '#7a2222',
                    950: '#420d0d',
                },
            },
        },
    },
    plugins: [],
};
