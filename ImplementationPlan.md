# Guardian Health USA — ImplementationPlan

## 1. Final Implementation Rule

> **Build the Home page only.**

Do not implement any other page.

The `design/` folder contains only one page reference:

```text
Home
```

All other navigation items are Coming Soon.

---

# 2. Implementation Sequence

```text
01 Laravel setup
02 Global design foundation
03 Blade layout
04 Header / Navigator
05 Coming Soon interaction
06 Footer
07 Hero
08 Trust Strip
09 Product Portfolio
10 Featured Products / Projects
11 Hydrate Elite Packaging
12 Promotional Cards
13 Manufacturing / Private Label Preview
14 Quality Preview
15 Partner CTA
16 Responsive QA
17 Visual QA
18 Final cleanup
```

One task at a time.

One section at a time.

---

# 3. Step 01 — Laravel Setup

Set up:

- Laravel
- Vite
- Bootstrap
- Blade
- CSS
- JavaScript

Confirm the application runs before visual implementation.

---

# 4. Step 02 — Global Foundation

Create:

```text
resources/css/app.css
resources/js/app.js
```

Define:

- colors
- typography
- spacing
- container widths
- button styles
- card base styles

Do not implement Home sections yet.

---

# 5. Step 03 — Blade Layout

Create:

```text
resources/views/layouts/app.blade.php
```

Reusable components:

```text
header.blade.php
footer.blade.php
coming-soon.blade.php
```

Home:

```text
pages/home.blade.php
```

---

# 6. Step 04 — Header / Navigator

Build the Home header from the supplied reference.

Include:

- top bar
- logo
- navigation
- CTA
- responsive mobile menu
- Home active state

Use Bootstrap navbar/collapse.

---

# 7. Step 05 — Coming Soon

All non-Home navigation items must use Coming Soon behavior:

```text
Products
Private Label
Manufacturing
Quality
About Us
Contact Us
Get a Quote
```

Do not create routes for unfinished pages.

Preferred solution:

```text
Bootstrap modal
```

or a simple accessible Bootstrap alert.

Keep the implementation minimal.

---

# 8. Step 06 — Footer

Build the footer exactly according to the Home reference.

Any future-page footer link must show Coming Soon.

---

# 9. Step 07 — Hero

Build only the Hero first.

Requirements:

- Bootstrap carousel
- exactly 3 slides
- supplied approved first visual
- two Banana AI generated visuals
- headline
- supporting text
- CTAs

Stop and visually compare before moving on.

---

# 10. Banana AI Workflow

For each missing Hero visual:

```text
Analyze Home reference
↓
Define exact image composition
↓
Generate with Banana AI
↓
Compare to reference
↓
Adjust if necessary
↓
Optimize
↓
Place production asset in public/assets/images/
```

The image must not look like unrelated AI artwork.

---

# 11. Section-by-Section Development

Every Home section is a separate task.

Example:

```text
Task: Build Trust Strip only.

Do not modify Hero.
Do not build Product Portfolio.
Do not add unrelated content.
Use the supplied Home reference.
```

After implementation:

```text
Build
↓
Run
↓
Screenshot
↓
Compare
↓
Fix
↓
Approve
```

---

# 12. JavaScript Rule

Start with no custom JavaScript.

Use:

```text
Bootstrap carousel
Bootstrap navbar/collapse
Bootstrap modal/alert
```

before writing custom JS.

Only add custom JS when genuinely necessary.

---

# 13. Code Rule

All code must be:

- simple
- section-wise
- readable
- maintainable
- easy to understand

Prefer:

```text
HTML
↓
Bootstrap
↓
CSS
↓
minimal JS
```

Avoid over-engineering.

---

# 14. Responsive QA

Test at:

```text
1920px
1440px
1200px
992px
768px
576px
390px
```

Check:

- header
- navigation
- carousel
- images
- cards
- typography
- buttons
- spacing
- footer
- horizontal overflow

---

# 15. Final QA

Home is complete only when:

- all approved Home sections exist
- visual hierarchy matches the reference
- carousel works
- navigation works
- Coming Soon states work
- responsive behavior works
- images are optimized
- no console errors remain
- no fake secondary pages exist
- no unnecessary JavaScript exists

---

# 16. Explicit Stop Point

After Home final approval:

> **STOP.**

Do not automatically implement:

```text
Products
Private Label
Manufacturing
Quality
About
Contact
Request a Quote
Customer Portal
```

Those are outside the current implementation scope.
