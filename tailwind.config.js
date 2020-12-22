module.exports = {
    prefix: "",
    important: false,
    separator: ":",
    future: {
        removeDeprecatedGapUtilities: true,
    },
    purge: {
        mode: 'layers',
        layers: ['utilities'],
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.vue",
            "./resources/**/*.js",
            "./config/components.php",
        ],
    },
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "1024px",
            xl: "1680px",
        },
        colors: {
            inherit: "inherit",
            transparent: "transparent",
            black: "#000000",
            white: "#ffffff",
            gray: {
                default: "#F4F4F4",
                mid: "#303030",
            },
            green: {
                soft: "#E9F9E3",
                default: "#00ff00",
            },
        },
        spacing: {
            px: "1px",
            "0": "0",
            "05": "2px",
            "1": "4px",
            "2": "8px",
            "3": "12px",
            "4": "16px",
            "5": "20px",
            "6": "24px",
            "8": "32px",
            "10": "40px",
            "15": "60px",
            "20": "80px",
            "25": "100px",
            "30": "120px",
            "40": "160px",
            "50": "200px",
            "60": "240px",
            "70": "280px",
            "90": "360px",
            "screen-5": "1.25vw",
            "screen-6": "1.5vw",
            "screen-8": "2vw",
            "screen-10": "2.5vw",
            "screen-15": "3.75vw",
            "screen-20": "5vw",
            "screen-30": "7.5vw",
            "screen-40": "10vw",
            "screen-50": "12.5vw",
            "screen-70": "17.5vw",
        },
        backgroundColor: theme => theme("colors"),
        backgroundPosition: {
            bottom: "bottom",
            center: "center",
            left: "left",
            "left-bottom": "left bottom",
            "left-top": "left top",
            right: "right",
            "right-bottom": "right bottom",
            "right-top": "right top",
            top: "top",
        },
        backgroundSize: {
            auto: "auto",
            cover: "cover",
            contain: "contain",
        },
        borderColor: theme => ({
            ...theme("colors"),
            default: theme("colors.gray.300", "currentColor"),
        }),
        borderRadius: {
            none: "0",
            sm: "0.125rem",
            default: "0.25rem",
            md: "0.375rem",
            lg: "0.5rem",
            full: "9999px",
        },
        borderWidth: {
            default: "1px",
            "0": "0",
            "2": "2px",
            "4": "4px",
            "8": "8px",
        },
        boxShadow: {
            xs: "0 0 0 1px rgba(0, 0, 0, 0.05)",
            sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
            default:
                "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
            md:
                "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
            lg: "0 10px 50px rgba(0, 0, 0, 0.08)",
            xl:
                "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
            "2xl": "0 25px 50px -12px rgba(0, 0, 0, 0.25)",
            inner: "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)",
            outline: "0 0 0 3px rgba(66, 153, 225, 0.5)",
            none: "none",
        },
        container: {},
        cursor: {
            auto: "auto",
            default: "default",
            pointer: "pointer",
            wait: "wait",
            text: "text",
            move: "move",
            "not-allowed": "not-allowed",
        },
        divideColor: theme => theme("borderColor"),
        divideWidth: theme => theme("borderWidth"),
        fill: {
            current: "currentColor",
        },
        flex: {
            "1": "1 1 0%",
            auto: "1 1 auto",
            initial: "0 1 auto",
            none: "none",
        },
        flexGrow: {
            "0": "0",
            default: "1",
        },
        flexShrink: {
            "0": "0",
            default: "1",
        },
        fontFamily: {
            hero: ["Grtsk Tera", "sans-serif"],
            sans: ["Grtsk Peta", "sans-serif"],
            serif: ["Brava Slab", "serif"],
            mono: [],
        },
        fontSize: {
            xs: "0.8125rem",
            sm: "0.90625rem",
            "like-sm": "0.864vw",
            base: "1rem",
            lg: "1.125rem",
            "like-lg": "1.0715vw",
            xl: "1.375rem",
            "like-xl": "1.31vw",
            "2xl": "1.5rem",
            "like-2xl": "1.429vw",
            "3xl": "2rem",
            "like-3xl": "1.905vw",
            "4xl": "2.25rem",
            "5xl": "3rem",
            "6xl": "4.5rem",
            "like-6xl": "4.286vw",
        },
        fontWeight: {
            hairline: "100",
            thin: "200",
            light: "300",
            normal: "400",
            medium: "500",
            semibold: "600",
            bold: "700",
            extrabold: "800",
            black: "900",
        },
        height: theme => ({
            auto: "auto",
            ...theme("spacing"),
            full: "100%",
            screen: "100vh",
        }),
        inset: {
            "1/2": "50%",
            "0": "0",
            "12": "48px",
            "32": "128px",
            auto: "auto",
        },
        letterSpacing: {
            tighter: "-0.05em",
            tight: "-0.025em",
            normal: "0",
            wide: "0.025em",
            wider: "0.05em",
            widest: "0.1em",
        },
        lineHeight: {
            none: "1",
            tight: "1.25",
            snug: "1.375",
            normal: "1.5",
            relaxed: "1.625",
            loose: "2",
        },
        listStyleType: {
            none: "none",
            disc: "disc",
            decimal: "decimal",
        },
        margin: (theme, { negative }) => ({
            auto: "auto",
            ...theme("spacing"),
            ...negative(theme("spacing")),
        }),
        maxHeight: theme => ({
            ...theme("spacing"),
            full: "100%",
            screen: "100vh",
        }),
        maxWidth: (theme, { breakpoints }) => ({
            none: "none",
            ...theme("spacing"),
            xs: "20rem",
            sm: "24rem",
            md: "28rem",
            lg: "32rem",
            xl: "36rem",
            "2xl": "42rem",
            "3xl": "48rem",
            "4xl": "56rem",
            "5xl": "64rem",
            "6xl": "72rem",
            full: "100%",
            ...breakpoints(theme("screens")),
        }),
        minHeight: {
            "0": "0",
            full: "100%",
            screen: "100vh",
        },
        minWidth: {
            "0": "0",
            full: "100%",
        },
        objectPosition: {
            bottom: "bottom",
            center: "center",
            left: "left",
            "left-bottom": "left bottom",
            "left-top": "left top",
            right: "right",
            "right-bottom": "right bottom",
            "right-top": "right top",
            top: "top",
        },
        opacity: {
            "0": "0",
            "25": "0.25",
            "50": "0.5",
            "75": "0.75",
            "100": "1",
        },
        order: {
            first: "-9999",
            last: "9999",
            none: "0",
            "1": "1",
            "2": "2",
            "3": "3",
            "4": "4",
            "5": "5",
            "6": "6",
            "7": "7",
            "8": "8",
            "9": "9",
            "10": "10",
            "11": "11",
            "12": "12",
        },
        padding: theme => theme("spacing"),
        placeholderColor: theme => theme("colors"),
        space: theme => theme("spacing"),
        stroke: {
            current: "currentColor",
        },
        strokeWidth: {
            "0": "0",
            "1": "1",
            "2": "2",
        },
        textColor: theme => theme("colors"),
        width: theme => ({
            auto: "auto",
            ...theme("spacing"),
            "1/10": "10%",
            "2/10": "20%",
            "3/10": "30%",
            "4/10": "40%",
            "5/10": "50%",
            "6/10": "60%",
            "7/10": "70%",
            "8/10": "80%",
            "9/10": "90%",
            "1/12": "8.333333%",
            "2/12": "16.666667%",
            "3/12": "25%",
            "4/12": "33.333333%",
            "5/12": "41.666667%",
            "6/12": "50%",
            "7/12": "58.333333%",
            "8/12": "66.666667%",
            "9/12": "75%",
            "10/12": "83.333333%",
            "11/12": "91.666667%",
            full: "100%",
            screen: "100vw",
        }),
        zIndex: {
            auto: "auto",
            "0": "0",
            "10": "10",
            "20": "20",
            "30": "30",
            "40": "40",
            "50": "50",
        },
        gap: theme => theme("spacing"),
        gridTemplateColumns: {
            none: "none",
            "1": "repeat(1, minmax(0, 1fr))",
            "2": "repeat(2, minmax(0, 1fr))",
            "3": "repeat(3, minmax(0, 1fr))",
            "4": "repeat(4, minmax(0, 1fr))",
            "5": "repeat(5, minmax(0, 1fr))",
            "6": "repeat(6, minmax(0, 1fr))",
            "7": "repeat(7, minmax(0, 1fr))",
            "8": "repeat(8, minmax(0, 1fr))",
            "9": "repeat(9, minmax(0, 1fr))",
            "10": "repeat(10, minmax(0, 1fr))",
            "11": "repeat(11, minmax(0, 1fr))",
            "12": "repeat(12, minmax(0, 1fr))",
        },
        gridColumn: {
            auto: "auto",
            "span-1": "span 1 / span 1",
            "span-2": "span 2 / span 2",
            "span-3": "span 3 / span 3",
            "span-4": "span 4 / span 4",
            "span-5": "span 5 / span 5",
            "span-6": "span 6 / span 6",
            "span-7": "span 7 / span 7",
            "span-8": "span 8 / span 8",
            "span-9": "span 9 / span 9",
            "span-10": "span 10 / span 10",
            "span-11": "span 11 / span 11",
            "span-12": "span 12 / span 12",
        },
        gridColumnStart: {
            auto: "auto",
            "1": "1",
            "2": "2",
            "3": "3",
            "4": "4",
            "5": "5",
            "6": "6",
            "7": "7",
            "8": "8",
            "9": "9",
            "10": "10",
            "11": "11",
            "12": "12",
            "13": "13",
        },
        gridColumnEnd: {
            auto: "auto",
            "1": "1",
            "2": "2",
            "3": "3",
            "4": "4",
            "5": "5",
            "6": "6",
            "7": "7",
            "8": "8",
            "9": "9",
            "10": "10",
            "11": "11",
            "12": "12",
            "13": "13",
        },
        gridTemplateRows: {
            none: "none",
            "1": "repeat(1, minmax(0, 1fr))",
            "2": "repeat(2, minmax(0, 1fr))",
            "3": "repeat(3, minmax(0, 1fr))",
            "4": "repeat(4, minmax(0, 1fr))",
            "5": "repeat(5, minmax(0, 1fr))",
            "6": "repeat(6, minmax(0, 1fr))",
        },
        gridRow: {
            auto: "auto",
            "span-1": "span 1 / span 1",
            "span-2": "span 2 / span 2",
            "span-3": "span 3 / span 3",
            "span-4": "span 4 / span 4",
            "span-5": "span 5 / span 5",
            "span-6": "span 6 / span 6",
        },
        gridRowStart: {
            auto: "auto",
            "1": "1",
            "2": "2",
            "3": "3",
            "4": "4",
            "5": "5",
            "6": "6",
            "7": "7",
        },
        gridRowEnd: {
            auto: "auto",
            "1": "1",
            "2": "2",
            "3": "3",
            "4": "4",
            "5": "5",
            "6": "6",
            "7": "7",
        },
        transformOrigin: {
            center: "center",
            top: "top",
            "top-right": "top right",
            right: "right",
            "bottom-right": "bottom right",
            bottom: "bottom",
            "bottom-left": "bottom left",
            left: "left",
            "top-left": "top left",
        },
        scale: {
            "0": "0",
            "50": ".5",
            "75": ".75",
            "90": ".9",
            "95": ".95",
            "100": "1",
            "105": "1.05",
            "110": "1.1",
            "125": "1.25",
            "150": "1.5",
        },
        rotate: {
            "-180": "-180deg",
            "-90": "-90deg",
            "-45": "-45deg",
            "0": "0",
            "45": "45deg",
            "90": "90deg",
            "180": "180deg",
        },
        translate: (theme, { negative }) => ({
            ...theme("spacing"),
            ...negative(theme("spacing")),
            "-full": "-100%",
            "-1/2": "-50%",
            "1/2": "50%",
            full: "100%",
        }),
        skew: {
            "-12": "-12deg",
            "-6": "-6deg",
            "-3": "-3deg",
            "0": "0",
            "3": "3deg",
            "6": "6deg",
            "12": "12deg",
        },
        transitionProperty: {
            none: "none",
            all: "all",
            default:
                "background-color, border-color, color, fill, stroke, opacity, box-shadow, transform",
            colors: "background-color, border-color, color, fill, stroke",
            opacity: "opacity",
            shadow: "box-shadow",
            transform: "transform",
        },
        transitionTimingFunction: {
            linear: "linear",
            in: "cubic-bezier(0.4, 0, 1, 1)",
            out: "cubic-bezier(0, 0, 0.2, 1)",
            "in-out": "cubic-bezier(0.4, 0, 0.2, 1)",
        },
        transitionDuration: {
            "75": "75ms",
            "100": "100ms",
            "150": "150ms",
            "200": "200ms",
            "300": "300ms",
            "500": "500ms",
            "700": "700ms",
            "1000": "1000ms",
        },
    },
    variants: {
        accessibility: ["responsive", "focus"],
        alignContent: ["responsive"],
        alignItems: ["responsive"],
        alignSelf: ["responsive"],
        appearance: ["responsive"],
        backgroundAttachment: ["responsive"],
        backgroundColor: ["responsive", "hover", "focus"],
        backgroundPosition: ["responsive"],
        backgroundRepeat: ["responsive"],
        backgroundSize: ["responsive"],
        borderCollapse: ["responsive"],
        borderColor: ["responsive", "hover", "focus"],
        borderRadius: ["responsive"],
        borderStyle: ["responsive"],
        borderWidth: ["responsive"],
        boxShadow: ["responsive", "hover", "focus"],
        boxSizing: ["responsive"],
        cursor: ["responsive"],
        display: ["responsive"],
        fill: ["responsive"],
        flex: ["responsive"],
        flexDirection: ["responsive"],
        flexGrow: ["responsive"],
        flexShrink: ["responsive"],
        flexWrap: ["responsive"],
        float: ["responsive"],
        clear: ["responsive"],
        fontFamily: ["responsive"],
        fontSize: ["responsive"],
        fontSmoothing: ["responsive"],
        fontStyle: ["responsive"],
        fontWeight: ["responsive", "hover", "focus"],
        height: ["responsive"],
        inset: ["responsive"],
        justifyContent: ["responsive"],
        letterSpacing: ["responsive"],
        lineHeight: ["responsive"],
        listStylePosition: ["responsive"],
        listStyleType: ["responsive"],
        margin: ["responsive"],
        maxHeight: ["responsive"],
        maxWidth: ["responsive"],
        minHeight: ["responsive"],
        minWidth: ["responsive"],
        objectFit: ["responsive"],
        objectPosition: ["responsive"],
        opacity: ["responsive", "hover", "focus"],
        order: ["responsive"],
        outline: ["responsive", "focus"],
        overflow: ["responsive"],
        padding: ["responsive"],
        placeholderColor: ["responsive", "focus"],
        pointerEvents: ["responsive"],
        position: ["responsive"],
        resize: ["responsive"],
        stroke: ["responsive"],
        strokeWidth: ["responsive"],
        tableLayout: ["responsive"],
        textAlign: ["responsive"],
        textColor: ["responsive", "hover", "focus"],
        textDecoration: ["responsive", "hover", "focus"],
        textTransform: ["responsive"],
        userSelect: ["responsive"],
        verticalAlign: ["responsive"],
        visibility: ["responsive"],
        whitespace: ["responsive"],
        width: ["responsive"],
        wordBreak: ["responsive"],
        zIndex: ["responsive"],
        gap: ["responsive"],
        gridAutoFlow: ["responsive"],
        gridTemplateColumns: ["responsive"],
        gridColumn: ["responsive"],
        gridColumnStart: ["responsive"],
        gridColumnEnd: ["responsive"],
        gridTemplateRows: ["responsive"],
        gridRow: ["responsive"],
        gridRowStart: ["responsive"],
        gridRowEnd: ["responsive"],
        transform: ["responsive"],
        transformOrigin: ["responsive"],
        scale: ["responsive", "group-hover", "hover", "focus"],
        rotate: ["responsive", "hover", "focus"],
        translate: ["responsive", "hover", "focus"],
        skew: ["responsive", "hover", "focus"],
        transitionProperty: ["responsive"],
        transitionTimingFunction: ["responsive"],
        transitionDuration: ["responsive"],
    },
    corePlugins: {},
    plugins: [],
};
