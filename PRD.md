# Guardian Health USA — PRD

## 1. Product Definition

Guardian Health USA is presented as a premium pharmaceutical and nutraceutical contract manufacturing and packaging company.

The website must communicate:

- manufacturing expertise
- packaging capabilities
- product capabilities
- quality
- reliability
- private-label expertise
- turnkey manufacturing
- strong B2B positioning

---

# 2. Final Product Scope

The current product is a **single Home page experience**.

```text
Implemented:
HOME

Not implemented:
PRODUCTS
PRIVATE LABEL
MANUFACTURING
QUALITY
ABOUT US
CONTACT US
REQUEST A QUOTE
CUSTOMER PORTAL
```

All non-Home destinations are represented by **Coming Soon** behavior.

---

# 3. Design Reference Source

The `design/` folder contains:

```text
Home reference image
design.md
```

The Home image is the sole visual source of truth.

Do not expect or require separate reference images for other pages.

---

# 4. Home Page Requirements

The Home page must include every major section shown in the approved reference.

Required structure:

1. Top information bar
2. Main navigation
3. Hero
4. Hero carousel
5. Trust / proof strip
6. Product portfolio
7. Featured products / projects
8. Hydrate Elite packaging options
9. Promotional product/service cards
10. End-to-end manufacturing and private-label preview
11. Quality section
12. Partner / conversion CTA
13. Footer

Do not omit sections represented in the reference.

Do not add unrelated sections.

---

# 5. Header / Navigator

The header must include the approved visual navigation.

```text
HOME
PRODUCTS
PRIVATE LABEL
MANUFACTURING
QUALITY
ABOUT US
CONTACT US
GET A QUOTE
```

Only Home is active.

All other items must display Coming Soon.

---

# 6. Hero Requirements

The Hero must contain:

- approved Guardian Health branding
- large headline
- supporting copy
- primary CTA
- secondary CTA
- large product/manufacturing visual
- Bootstrap carousel

Carousel requirements:

```text
3 slides
```

Slide 1:

- use the supplied approved Home image/visual.

Slides 2 and 3:

- generate with Banana AI
- follow the same visual direction as the approved Home reference
- do not introduce unrelated imagery

---

# 7. Visual Requirements

The Home page must preserve:

- white/light-gray foundation
- primary navy
- electric blue
- Guardian green
- sunset orange
- premium typography
- clean pharmaceutical presentation
- high-quality product imagery
- controlled shadows
- rounded cards
- strong spacing hierarchy
- responsive layout

---

# 8. Interaction Requirements

Required:

- responsive navigation
- Bootstrap carousel
- Coming Soon feedback for future navigation
- normal hover/focus states

Not required:

- authentication
- customer portal
- ecommerce checkout
- real RFQ submission
- real product search
- real customer dashboard
- backend lead management

---

# 9. Technical Acceptance

The Home page passes acceptance when:

- visual structure closely matches the approved reference
- every approved Home section is present
- navigation is responsive
- carousel works
- Coming Soon states work
- mobile layout works
- no unnecessary JavaScript exists
- no console errors exist
- no fake secondary pages exist
