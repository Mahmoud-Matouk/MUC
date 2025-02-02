import preset from "./vendor/filament/support/tailwind.config.preset";

const colors = require("tailwindcss/colors");

const dark = {
    50: "#FDF2F2",
    100: "#FAE5E5",
    200: "#F4C7C7",
    300: "#EFAEAE",
    400: "#EA9494",
    500: "#777E90",
    600: "#E05D5D",
    700: "#DB4343",
    800: "#141F1F",
    900: "#6B1515",
    950: "#330A0A",
};

const primary = {
    50: "#f0f8ff",
    100: "#e0f0fe",
    200: "#bae1fd",
    300: "#7cc8fd",
    400: "#2eaaf9",
    500: "#0d94ea",
    600: "#0174c8",
    700: "#025ca2",
    800: "#064f86",
    900: "#0b426f",
    950: "#082a49",
};

const secondary = {
    50: "#fffaeb",
    100: "#fff1c6",
    200: "#ffe188",
    300: "#ffcc4a",
    400: "#ffb215",
    500: "#f99307",
    600: "#dd6c02",
    700: "#b74a06",
    800: "#94380c",
    900: "#7a2f0d",
    950: "#461702",
};

/** @type {import('tailwindcss').Config} */
module.exports = {
    plugins: [require("tailwind-clip-path")],
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./app/Livewire/**/*.php",
        "./resources/**/*.blade.php",
    ],
    safelist: [
        "text-primary-800",
        "bg-[#366BD1]",
        "bg-[#F5D773]",
        "bg-[#032D25]",
        "text-white",
        "text-black",
        "fill-[#072764]",
        "fill-[#C09300]",
        "fill-[#021E19]",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1170px",
        },

        extend: {
            backgroundImage: {
                "who-back": "url('/public/assets/img/home/who/rec.svg')",
            },
            content: {
                word: 'url("/public/assets/img/home/intro/word_bg.svg")',
            },
            animation: {
                "infinite-scroll": "infinite-scroll 25s linear infinite",
                "fade-in": "fade-in linear forwards",
            },
            keyframes: {
                "infinite-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(100%)" },
                },
                "fade-in": {
                    from: {
                        opacity: 0,
                    },
                    to: {
                        opacity: 1,
                    },
                },
            },
            colors: {
                primary: primary,
                secondary: secondary,
                gray: `#959595`,
                light: `#F5F5F5`,
                dark: dark,
                white: `#fff`,
                orange: "#F5D773",
            },
        },

        container: {
            center: true,
            padding: "10px",
        },
    },
};
