# Guardian Health USA — AppFlow

## 1. Final Scope

This project has one implemented page:

> **HOME**

The `design/` folder contains only the approved Home page reference image and this `design.md` file.

There are no reference designs for secondary pages because secondary pages are not part of the current implementation.

All non-Home navigation items must show **Coming Soon**.

---

## 2. Complete User Flow

```text
Visitor
  ↓
Home
  ↓
Top Information Bar
  ↓
Main Navigator
  ↓
Hero / Bootstrap Carousel
  ↓
Trust / Proof Strip
  ↓
Product Portfolio
  ↓
Featured Products / Projects
  ↓
Hydrate Elite Packaging Options
  ↓
Product / Service Promotional Cards
  ↓
Manufacturing & Private Label Preview
  ↓
Quality Preview
  ↓
Partner CTA
  ↓
Footer
```

The exact section order and visual hierarchy are controlled by the single Home reference image.

---

## 3. Global Navigator

The Home navigator visually contains:

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

### Behavior

`HOME` is the only active destination.

Every other navigation item must display:

```text
COMING SOON
```

They must not open an unfinished page.

---

## 4. Coming Soon Rule

When a visitor selects any future destination:

```text
Click
 ↓
Coming Soon notification
```

Use the simplest suitable Bootstrap behavior, such as a modal or accessible alert.

Do not create:

- fake pages
- blank routes
- placeholder page layouts
- fake forms
- fake dashboards

---

## 5. Hero Flow

The Hero contains a Bootstrap carousel with exactly three slides:

```text
Slide 1 → supplied Home reference visual
Slide 2 → Banana AI generated related visual
Slide 3 → Banana AI generated related visual
```

The first slide must use the approved existing image.

The other two images must match the Home reference in:

- product category
- lighting
- composition
- premium commercial quality
- color language
- camera direction
- background treatment

---

## 6. Home CTA Flow

Home CTAs may visually include:

```text
Explore Products
Partner With Us
Get a Quote
Learn More
View Products
```

If a CTA points toward a future page or feature, it must use the Coming Soon behavior.

No fake functionality.

---

## 7. Customer Portal

If the top bar contains:

```text
GUARDIAN PORTAL (COMING SOON)
```

it remains informational and does not open a portal.

---

## 8. Footer Flow

The footer is part of Home.

Future-page footer links also use Coming Soon behavior.

---

## 9. Development Stop Condition

The current project ends when:

```text
Home implemented
+
Home visually approved
+
Responsive QA passed
+
Coming Soon behavior works
+
No console errors
```

Do not begin additional pages in this implementation phase.
