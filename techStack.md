# Guardian Health USA — techStack

## 1. Approved Technology

```text
Laravel
Blade
HTML5
CSS3
Bootstrap
Vanilla JavaScript
Vite
```

Keep the stack intentionally small.

---

# 2. Application Scope

There is one implemented page:

```text
Home
```

Do not build secondary page templates in this phase.

---

# 3. Recommended Laravel Structure

```text
app/
├── Http/
│   └── Controllers/
└── Models/

public/
└── assets/
    ├── images/
    └── icons/

resources/
├── css/
├── js/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── components/
    │   ├── header.blade.php
    │   ├── footer.blade.php
    │   └── coming-soon.blade.php
    └── pages/
        └── home.blade.php

routes/
└── web.php

design/
├── home-reference-image.*
└── design.md
```

The exact image filename may remain whatever the user supplies. Do not rename it unless required.

---

# 4. Blade

Use Blade for:

- main layout
- header
- footer
- Coming Soon component
- Home page

Keep reusable components small and understandable.

---

# 5. Bootstrap

Use Bootstrap for:

- responsive grid
- navbar
- collapse
- carousel
- buttons
- modal/alert for Coming Soon
- standard responsive utilities

Do not build a custom carousel.

---

# 6. CSS

Use custom CSS for:

- exact reference matching
- brand colors
- typography
- spacing
- card styling
- shadows
- section-specific layouts
- responsive adjustments

Organize CSS by section.

Example:

```text
Header
Hero
Trust Strip
Products
Featured Projects
Packaging
Manufacturing
Quality
CTA
Footer
```

---

# 7. JavaScript

Use JavaScript only when HTML, CSS, Bootstrap, or Laravel cannot reasonably provide the required behavior.

Preferred approach:

```text
HTML
↓
Bootstrap
↓
CSS
↓
minimal Vanilla JS
```

The Bootstrap carousel should not be replaced with custom JavaScript.

Coming Soon should preferably use Bootstrap's built-in interaction mechanisms.

---

# 8. Image Assets

There are two distinct asset categories.

### Design reference

```text
design/
```

This contains the client's approved Home screenshot/reference.

### Production assets

```text
public/assets/images/
```

These are optimized images actually used by the website.

Do not treat the reference screenshot itself as a production background unless specifically required.

---

# 9. Banana AI

Use Banana AI for missing visual assets when instructed.

For the Hero:

```text
Slide 1 → approved supplied visual
Slide 2 → Banana AI
Slide 3 → Banana AI
```

Generated visuals must follow the reference rather than introducing a new visual style.

---

# 10. Performance

Use:

- optimized image formats
- correct dimensions
- lazy loading below the fold
- minimal JavaScript
- Vite production build
- no unnecessary libraries

---

# 11. Code Simplicity

Code must be understandable by an 11th-grade student.

Avoid:

- unnecessary abstraction
- complicated state management
- large frontend frameworks
- unnecessary packages
- custom solutions when Bootstrap already solves the problem
