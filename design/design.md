# Guardian Health USA — design

## 1. Sole Source of Truth

The `design/` folder contains only the approved **Home page reference image** and this file.

Therefore:

> The Home reference image is the sole visual source of truth for the current project.

There are no secondary-page screenshots to implement.

---

# 2. Page Scope

Design only:

```text
HOME
```

Everything else is Coming Soon.

---

# 3. Home Visual Direction

The Home reference establishes the complete visual language:

```text
Premium
Pharmaceutical
Nutraceutical
Corporate
Modern
Clean
Trustworthy
Colorful but controlled
```

The implementation must follow the supplied image rather than reinterpret it.

---

# 4. Layout

Match the reference for:

- overall page width
- header height
- section order
- section spacing
- card widths
- image proportions
- text alignment
- CTA placement
- footer structure

---

# 5. Brand Palette

Use the reference palette:

```text
Primary Navy
#0B103A

Electric Blue
#0A6EFF

Guardian Green
#00867A

Sunset Orange
#FF8A00

Light Gray
#F5F7FA

Dark Gray
#1D2430
```

If the screenshot visually differs slightly because of rendering/compression, the screenshot remains the final visual comparison source.

---

# 6. Typography

Reference direction:

```text
Headings → Montserrat Bold
Body → Inter Regular / Medium
```

Preserve the hierarchy and approximate sizing from the screenshot.

---

# 7. Border Radius

Reference system:

```text
Large cards → 16px
Buttons → 10px
Small controls / inputs → 6px
```

---

# 8. Shadows

Reference direction:

```text
Card:
0 8px 24px rgba(10, 25, 60, 0.08)

Hover:
0 16px 40px rgba(10, 25, 60, 0.12)
```

Do not overuse shadows.

---

# 9. Home Header

The header contains the approved:

- top information strip
- Guardian Health logo
- main navigation
- CTA
- social/platform indicators where shown
- responsive mobile navigation

Home is the only active destination.

---

# 10. Coming Soon Navigation

The following labels remain visible:

```text
PRODUCTS
PRIVATE LABEL
MANUFACTURING
QUALITY
ABOUT US
CONTACT US
GET A QUOTE
```

They must produce a clear Coming Soon state.

The Coming Soon UI should use the existing visual language and should not look like a separate unrelated component.

---

# 11. Hero

The Hero must preserve the reference composition.

Required:

- headline
- supporting text
- primary CTA
- secondary CTA
- product/manufacturing imagery
- Bootstrap carousel

Exactly three slides:

```text
1. supplied approved visual
2. Banana AI generated visual
3. Banana AI generated visual
```

---

# 12. Home Sections

The implementation must reproduce all major sections shown in the reference:

```text
Trust / proof strip
Product portfolio
Featured products / projects
Hydrate Elite packaging
Product/service promotional cards
Manufacturing/private-label preview
Quality
Partner CTA
Footer
```

---

# 13. Image Fidelity

When generating or selecting assets, match:

- composition
- camera angle
- crop
- lighting
- product scale
- background
- color balance
- commercial photography quality

Do not use random stock images.

Do not add decorative AI images that are not required by the reference.

---

# 14. Animation

Use only restrained animation:

- Bootstrap carousel
- CSS hover transitions
- subtle transitions if visible/appropriate

No heavy animation framework.

---

# 15. Responsive Design

The same visual system must adapt to:

```text
Desktop
Laptop
Tablet
Mobile
```

Do not simply scale down the desktop layout.

---

# 16. Visual QA

Use this loop for every section:

```text
Reference screenshot
↓
Build section
↓
Browser screenshot
↓
Compare
↓
Correct
↓
Approve
```

Check:

- alignment
- spacing
- typography
- colors
- image crop
- card size
- button size
- section height
- responsive behavior

---

# 17. Hard Restrictions

Do not:

- create additional page designs
- invent secondary-page layouts
- add random sections
- change the brand palette
- add unrelated images
- add fake functionality
- create fake portal/dashboard pages
- build secondary pages

Current design scope is **Home only**.
