/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.php", "./**/*.js"],
    theme: {
        extend: {},
        container: {
            center: true,
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1140px",
            },
            padding: {
                DEFAULT: "24px",
            },
        },
        fontFamily: {
            body: ["Figtree", "Arial"],
            title: ["Bon Vivant", "Times New Roman"],
        },
        spacing: {
            0: "0px",
            4: "4px",
            8: "8px",
            12: "12px",
            16: "16px",
            24: "24px",
            32: "32px",
            40: "40px",
            48: "48px",
            56: "56px",
            64: "64px",
            72: "72px",
            80: "80px",
            88: "88px",
            96: "96px",
            112: "112px",
            128: "128px",
            144: "144px",
        },
        boxShadow: {
            sm: "0px 2px 3px 0px rgba(0,0,0,0.05)",
            md: "0px 4px 6px 0px rgba(0,0,0,0.07)",
            lg: "0px 10px 15px 0px rgba(0,0,0,0.1)",
            xl: "0px 20px 20px 0px rgba(0,0,0,0.1)",
        },
        colors: {
            "sage": {
                100: "#ebece1",
                200: "#d0d3c1",
                300: "#bdc1a8",
                400: "#b3b89c",
                500: "#a4a88a",
                600: "#949a79",
                700: "#868b6f",
                800: "#70745c",
                900: "#505342",
            },
            "chocolate": {
                100: "#e9e8e7",
                200: "#bdbbb8",
                300: "#918d89",
                400: "#645f59",
                500: "#4e4941",
                600: "#38322a",
                700: "#221b12",
                800: "#14100b",
            },
            "soft-white": {
                50: "#ffffff",
                100: "#fcfcfb",
                200: "#f6f6f5",
                300: "#ededec",
                400: "#e1e1e0",
            },
            "copper-red": {
                100: "#f4e2dc",
                200: "#e5b7a9",
                300: "#dfa997",
                400: "#da9a86",
                500: "#d58c75",
                600: "#ca6f52",
                700: "#b6644a",
                800: "#a25942",
                900: "#8d4e39",
            },
            pure: {
                black: "#000000",
                white: "#ffffff",
            },
            ui: {
                error: "#FF8383",
                success: "#90C08C",
            }
        },
    },
    plugins: [require("tailwind-animatecss")],
    safelist: [
        "py-40",
        "pr-12",
        "my-16",
        "my-40",
        "mt-80",
        "transition-all",
        {
            pattern: /w-./,
            variants: ['sm', 'md'],
        },
        {
            pattern: /h-./
        },
        {
            pattern: /items-./,
        },
        {
            pattern: /justify-./,
        },
        {
            pattern: /aspect-./,
        }
        
    ]
};
