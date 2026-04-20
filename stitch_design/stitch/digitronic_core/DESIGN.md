# Design System Strategy: High-End Editorial

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"Precision Engineering Meets Editorial Clarity."**

We are evolving the classic industrial reliability of the original brand into a premium, high-tech experience. This system moves away from the "boxy" templates of the past and toward a layout that feels curated and intentional. We achieve this through **intentional asymmetry**, where large-scale product imagery breaks the grid, and **tonal depth**, where elements are separated by soft shifts in light rather than rigid lines. This is not just a website; it is a digital showroom for professional-grade technology.

---

## 2. Colors
Our palette is rooted in the signature "Digitronic Blue," but refined through a spectrum of tonal surfaces to create a sense of sophisticated machinery.

### The Palette (Material Design Tokens)
*   **Primary (`#0062a0`):** The "Deep Logic" blue used for high-impact actions.
*   **Primary Container (`#3099ec`):** The "Vibrant Logic" blue, used to highlight active states and modern accents.
*   **Surface (`#f9f9f9`):** Our foundational white, designed to reduce eye strain compared to pure `#FFFFFF`.
*   **On-Surface (`#1a1c1c`):** An off-black for high-contrast, professional readability.

### The "No-Line" Rule
To achieve a high-end feel, **1px solid borders are prohibited for sectioning.** Boundaries must be defined solely through background color shifts.
*   *Implementation:* A section using `surface-container-low` should sit directly against a `surface` background. The shift in tone is enough to communicate a change in context without the visual "noise" of a line.

### Surface Hierarchy & Nesting
Treat the UI as a series of physical layers.
1.  **Base:** `surface` (The foundation).
2.  **Sectioning:** `surface-container-low` (Subtle grouping).
3.  **Emphasis:** `surface-container-highest` (Used for critical sidebars or feature blocks).
4.  **Floating Elements:** `surface-container-lowest` (Used for cards to provide a "pop" against darker containers).

### The "Glass & Gradient" Rule
To prevent the design from feeling flat:
*   **Glassmorphism:** Use `surface-variant` at 70% opacity with a `24px` backdrop-blur for floating navigation bars or overlays.
*   **Signature Gradients:** For primary CTAs, use a linear gradient from `primary` to `primary_container` (top-left to bottom-right). This mimics the sheen of high-quality automotive components.

---

## 3. Typography
We utilize a pairing of **Manrope** and **Inter** to balance industrial authority with modern accessibility.

*   **Display & Headline (Manrope):** Chosen for its geometric precision. Use `display-lg` for hero statements with tight letter-spacing (-0.02em) to create an "editorial" impact.
*   **Title & Body (Inter):** A workhorse font that ensures technical specifications remain legible at any size.
*   **The Hierarchy Strategy:** Lead with oversized headlines (`display-md`) followed by generous whitespace, then high-contrast body text (`body-lg`). This creates a rhythm of "Scan, Read, Act."

---

## 4. Elevation & Depth
In this system, depth is a product of light and layering, not artificial "drop shadows."

*   **The Layering Principle:** Use the `surface-container` tiers to create a soft lift. A `surface-container-lowest` card placed on a `surface-container-low` background creates a natural, "physical" lift.
*   **Ambient Shadows:** If a floating effect is required (e.g., for a modal), use a shadow with a 40px blur, 0px offset-y, and 6% opacity of `on-surface`. This mimics natural ambient light rather than a harsh "glow."
*   **The "Ghost Border" Fallback:** If accessibility requires a border, use the `outline-variant` token at **15% opacity**. It should be felt, not seen.
*   **Glassmorphism:** Navigation menus should use a semi-transparent `surface` with a heavy blur to allow the brand colors to bleed through, making the UI feel like it belongs to the environment.

---

## 5. Components

### Buttons (The "Engine" of the UI)
*   **Primary:** High-pill shape (`rounded-full`), using the signature gradient (`primary` to `primary_container`). White text.
*   **Secondary:** `surface-container-high` background with `on-surface` text. No border.
*   **Tertiary:** No background. `primary` text color with a `rounded-sm` focus state.

### Input Fields
*   **Style:** Minimalist. Use `surface-container-highest` for the field background.
*   **Focus:** Transition the background to `surface-container-lowest` and add a subtle 2px bottom-accent using `primary_container`. Forbid 4-sided heavy outlines.

### Cards & Lists
*   **Forbid Divider Lines:** Separate list items using vertical spacing (16px or 24px) or alternating subtle background shifts (`surface` to `surface-container-low`).
*   **Cards:** Use `rounded-xl` and tonal layering. Content should be padded generously (32px) to allow the "breath" requested in the modernization.

### Brand-Specific Components
*   **Tech-Spec Chips:** Use `secondary_container` with `on-secondary-container` text for technical data (e.g., "6-Cylinder," "OBDII Compatible").
*   **Status Indicators:** Use `primary_fixed_dim` for a "Standby" or "Active" glow effect, avoiding standard "traffic light" colors unless it's a critical error.

---

## 6. Do's and Don'ts

### Do:
*   **Use Intentional Asymmetry:** Align text to the left while imagery overlaps the right-hand container edge.
*   **Embrace Whitespace:** If a section feels crowded, double the padding. "Modern" is synonymous with "Space."
*   **Leverage High-Quality Assets:** Only use photography with a consistent lighting temperature (cool/neutral) to match the `primary` blue.

### Don't:
*   **Don't use 100% opaque borders:** They break the editorial flow and make the site feel like "v1.0."
*   **Don't use pure black (#000000):** It is too harsh for the sophisticated `surface` palette. Always use `on-surface`.
*   **Don't over-shadow:** If you can define a container with a color shift instead of a shadow, do it.
*   **Don't use Arial:** Even though it was in the original, we have evolved to **Inter** for better kerning and a more premium feel.

---

## 7. Spacing Scale
Maintain a strict 8px-based grid for consistency, but use "Editorial Spacing" for section headers:
*   **Section Padding:** 128px (Top/Bottom) to create a premium, "breathable" feel.
*   **Component Gap:** 24px (Standard) or 32px (Relaxed).
*   **Text Leading:** 1.5x for body text to ensure maximum readability for technical content.