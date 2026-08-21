import os

output_dir = "public/assets/images/industries"
os.makedirs(output_dir, exist_ok=True)

# 1. Nutraceuticals SVG
nutraceuticals_svg = '''<svg width="320" height="240" viewBox="0 0 320 240" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="nutra_bg" x1="0" y1="0" x2="0" y2="240" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <linearGradient id="amber_glass" x1="0" y1="0" x2="60" y2="100" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#D97706"/>
      <stop offset="50%" stop-color="#B45309"/>
      <stop offset="100%" stop-color="#78350F"/>
    </linearGradient>
    <linearGradient id="cap_grad" x1="0" y1="0" x2="0" y2="25" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#334155"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>
    <filter id="shadow_soft" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0B103A" flood-opacity="0.08"/>
    </filter>
  </defs>
  
  <rect width="320" height="240" rx="12" fill="url(#nutra_bg)"/>
  
  <!-- Ground Shadow -->
  <ellipse cx="160" cy="205" rx="85" ry="12" fill="#0B103A" fill-opacity="0.06"/>
  <ellipse cx="230" cy="202" rx="40" ry="7" fill="#0B103A" fill-opacity="0.05"/>

  <!-- Amber Bottle -->
  <g filter="url(#shadow_soft)">
    <!-- Bottle Body -->
    <rect x="120" y="85" width="80" height="110" rx="16" fill="url(#amber_glass)"/>
    <!-- Bottle Neck -->
    <rect x="138" y="70" width="44" height="18" rx="4" fill="url(#amber_glass)"/>
    <!-- Cap -->
    <rect x="134" y="52" width="52" height="22" rx="6" fill="url(#cap_grad)"/>
    <line x1="134" y1="63" x2="186" y2="63" stroke="#475569" stroke-width="1"/>
    
    <!-- White Label -->
    <rect x="124" y="105" width="72" height="75" rx="4" fill="#FFFFFF"/>
    <!-- Label Details -->
    <rect x="134" y="115" width="28" height="6" rx="3" fill="#2E7032"/>
    <rect x="134" y="127" width="52" height="8" rx="2" fill="#0B103A"/>
    <rect x="134" y="140" width="40" height="4" rx="2" fill="#64748B"/>
    <rect x="134" y="148" width="32" height="4" rx="2" fill="#94A3B8"/>
    
    <!-- Green Organic Leaf Stamp on Label -->
    <circle cx="178" cy="160" r="10" fill="#EBF6EC"/>
    <path d="M174 163C174 158 178 156 182 157C182 161 180 164 174 163Z" fill="#2E7032"/>
  </g>

  <!-- Supplement Capsules Scattered -->
  <!-- Capsule 1 (Left) -->
  <g transform="translate(75, 175) rotate(-25)">
    <rect x="0" y="0" width="16" height="34" rx="8" fill="#EBF6EC" stroke="#2E7032" stroke-width="2"/>
    <path d="M0 17H16V26C16 30.4 12.4 34 8 34C3.6 34 0 30.4 0 26V17Z" fill="#2E7032"/>
  </g>
  
  <!-- Capsule 2 (Right) -->
  <g transform="translate(220, 168) rotate(35)">
    <rect x="0" y="0" width="16" height="34" rx="8" fill="#FFFFFF" stroke="#0B103A" stroke-width="2"/>
    <path d="M0 0H16V17H0V0Z" fill="#0A6EFF"/>
  </g>

  <!-- Capsule 3 (Small front) -->
  <g transform="translate(100, 192) rotate(60)">
    <rect x="0" y="0" width="14" height="28" rx="7" fill="#FEF3C7" stroke="#D97706" stroke-width="1.8"/>
  </g>
</svg>
'''

# 2. Beauty & Cosmetics SVG
beauty_svg = '''<svg width="320" height="240" viewBox="0 0 320 240" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="beauty_bg" x1="0" y1="0" x2="0" y2="240" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <linearGradient id="glass_bottle" x1="0" y1="0" x2="50" y2="100" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#F1F5F9"/>
      <stop offset="100%" stop-color="#E2E8F0"/>
    </linearGradient>
    <linearGradient id="gold_accent" x1="0" y1="0" x2="50" y2="0" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#EAB308"/>
      <stop offset="100%" stop-color="#CA8A04"/>
    </linearGradient>
    <filter id="shadow_beauty" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0B103A" flood-opacity="0.07"/>
    </filter>
  </defs>

  <rect width="320" height="240" rx="12" fill="url(#beauty_bg)"/>

  <!-- Ground Shadows -->
  <ellipse cx="125" cy="205" rx="45" ry="8" fill="#0B103A" fill-opacity="0.06"/>
  <ellipse cx="205" cy="207" rx="55" ry="9" fill="#0B103A" fill-opacity="0.06"/>

  <!-- Dropper Bottle (Left) -->
  <g filter="url(#shadow_beauty)">
    <!-- Main Bottle -->
    <rect x="95" y="100" width="60" height="95" rx="12" fill="url(#glass_bottle)" stroke="#CBD5E1" stroke-width="1.5"/>
    <rect x="103" y="115" width="44" height="65" rx="4" fill="#FFFFFF"/>
    <!-- Label text simulation -->
    <rect x="113" y="127" width="24" height="4" rx="2" fill="#2E7032"/>
    <rect x="111" y="137" width="28" height="6" rx="2" fill="#0B103A"/>
    <rect x="115" y="148" width="20" height="3" rx="1" fill="#94A3B8"/>
    
    <!-- Dropper Collar & Bulb -->
    <rect x="111" y="86" width="28" height="14" rx="3" fill="url(#gold_accent)"/>
    <path d="M117 86C117 76 121 66 125 66C129 66 133 76 133 86H117Z" fill="#334155"/>
  </g>

  <!-- Skincare Cream Jar (Right) -->
  <g filter="url(#shadow_beauty)">
    <!-- Jar Body -->
    <path d="M160 145C160 137 167 130 175 130H235C243 130 250 137 250 145V190C250 198 243 205 235 205H175C167 205 160 198 160 190V145Z" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Gold Lid -->
    <rect x="156" y="120" width="98" height="18" rx="5" fill="url(#gold_accent)"/>
    <!-- Cream Jar Brand Label -->
    <rect x="180" y="155" width="50" height="8" rx="2" fill="#0B103A"/>
    <rect x="190" y="169" width="30" height="4" rx="2" fill="#2E7032"/>
  </g>

  <!-- Botanical Leaf Accent -->
  <path d="M70 180C50 160 55 135 80 130C85 155 75 175 70 180Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.5"/>
  <path d="M72 170C65 155 68 145 78 135" stroke="#2E7032" stroke-width="1.2"/>
</svg>
'''

# 3. Sports Nutrition SVG
sports_svg = '''<svg width="320" height="240" viewBox="0 0 320 240" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="sports_bg" x1="0" y1="0" x2="0" y2="240" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <linearGradient id="tub_grad" x1="0" y1="0" x2="90" y2="120" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#1E293B"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>
    <linearGradient id="stick_grad" x1="0" y1="0" x2="30" y2="90" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#2E7032"/>
      <stop offset="100%" stop-color="#1E4620"/>
    </linearGradient>
    <filter id="shadow_sports" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0B103A" flood-opacity="0.1"/>
    </filter>
  </defs>

  <rect width="320" height="240" rx="12" fill="url(#sports_bg)"/>

  <!-- Ground Shadows -->
  <ellipse cx="145" cy="206" rx="65" ry="10" fill="#0B103A" fill-opacity="0.08"/>
  <ellipse cx="235" cy="204" rx="30" ry="6" fill="#0B103A" fill-opacity="0.06"/>

  <!-- Protein / Hydration Tub (Left) -->
  <g filter="url(#shadow_sports)">
    <!-- Tub Body -->
    <rect x="95" y="85" width="100" height="115" rx="14" fill="url(#tub_grad)"/>
    <!-- Lid -->
    <rect x="91" y="65" width="108" height="24" rx="6" fill="#334155"/>
    <line x1="91" y1="77" x2="199" y2="77" stroke="#475569" stroke-width="1.5"/>
    
    <!-- Tub Metallic Label -->
    <rect x="99" y="105" width="92" height="75" fill="#FFFFFF"/>
    <!-- Label Graphics -->
    <rect x="109" y="117" width="40" height="6" rx="3" fill="#2E7032"/>
    <rect x="109" y="129" width="72" height="12" rx="2" fill="#0B103A"/>
    <rect x="109" y="147" width="55" height="5" rx="2" fill="#0A6EFF"/>
    
    <!-- Energy Bolt Icon on Tub Label -->
    <path d="M172 155L164 167H170L167 177L177 164H171L174 155Z" fill="#EAB308"/>
  </g>

  <!-- Electrolyte Stick Pack (Right) -->
  <g transform="translate(215, 105) rotate(12)" filter="url(#shadow_sports)">
    <rect x="0" y="0" width="34" height="95" rx="5" fill="url(#stick_grad)"/>
    <!-- Tear Notch -->
    <path d="M0 12L4 15L0 18V12Z" fill="#FFFFFF"/>
    <path d="M34 12L30 15L34 18V12Z" fill="#FFFFFF"/>
    <!-- Stick Pack Label Text -->
    <rect x="6" y="25" width="22" height="4" rx="2" fill="#FFFFFF"/>
    <rect x="6" y="34" width="22" height="35" rx="2" fill="#FFFFFF" fill-opacity="0.2"/>
    <circle cx="17" cy="51" r="6" fill="#EAB308"/>
  </g>
</svg>
'''

# 4. Health & Wellness SVG
wellness_svg = '''<svg width="320" height="240" viewBox="0 0 320 240" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="well_bg" x1="0" y1="0" x2="0" y2="240" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <linearGradient id="well_bottle" x1="0" y1="0" x2="70" y2="100" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F1F5F9"/>
    </linearGradient>
    <filter id="shadow_well" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0B103A" flood-opacity="0.07"/>
    </filter>
  </defs>

  <rect width="320" height="240" rx="12" fill="url(#well_bg)"/>

  <!-- Ground Shadows -->
  <ellipse cx="160" cy="205" rx="75" ry="10" fill="#0B103A" fill-opacity="0.06"/>

  <!-- Main Wellness Product Bottle -->
  <g filter="url(#shadow_well)">
    <!-- Bottle Body -->
    <rect x="120" y="80" width="80" height="115" rx="16" fill="url(#well_bottle)" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Bamboo / Green Cap -->
    <rect x="128" y="56" width="64" height="26" rx="6" fill="#2E7032"/>
    
    <!-- Clean Wellness Label -->
    <rect x="126" y="100" width="68" height="80" rx="4" fill="#FFFFFF"/>
    <!-- Heart & Pulse Graphic on Label -->
    <path d="M160 135C155 128 145 128 145 137C145 145 160 154 160 154C160 154 175 145 175 137C175 128 165 128 160 135Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
    
    <!-- Label Typography -->
    <rect x="140" y="112" width="40" height="5" rx="2.5" fill="#0B103A"/>
    <rect x="144" y="162" width="32" height="4" rx="2" fill="#64748B"/>
    <rect x="148" y="170" width="24" height="3" rx="1.5" fill="#94A3B8"/>
  </g>

  <!-- Botanical Leaf Background Accent -->
  <g transform="translate(75, 130)">
    <path d="M25 50C10 35 15 15 35 10C40 30 32 45 25 50Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.5"/>
    <path d="M26 42C20 30 23 20 32 14" stroke="#2E7032" stroke-width="1.2"/>
  </g>

  <!-- Effervescent Tablet / Drop (Right) -->
  <circle cx="225" cy="165" r="16" fill="#FFFFFF" stroke="#0A6EFF" stroke-width="2" filter="url(#shadow_well)"/>
  <path d="M225 155V175M215 165H235" stroke="#0A6EFF" stroke-width="2" stroke-linecap="round"/>
</svg>
'''

# 5. Pharmaceuticals SVG
pharma_svg = '''<svg width="320" height="240" viewBox="0 0 320 240" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="pharma_bg" x1="0" y1="0" x2="0" y2="240" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <linearGradient id="blister_foil" x1="0" y1="0" x2="100" y2="100" gradientUnits="userSpaceOnUse">
      <stop offset="0%" stop-color="#F1F5F9"/>
      <stop offset="50%" stop-color="#CBD5E1"/>
      <stop offset="100%" stop-color="#94A3B8"/>
    </linearGradient>
    <filter id="shadow_pharma" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0B103A" flood-opacity="0.08"/>
    </filter>
  </defs>

  <rect width="320" height="240" rx="12" fill="url(#pharma_bg)"/>

  <!-- Ground Shadows -->
  <ellipse cx="140" cy="205" rx="55" ry="8" fill="#0B103A" fill-opacity="0.06"/>
  <ellipse cx="220" cy="202" rx="45" ry="7" fill="#0B103A" fill-opacity="0.05"/>

  <!-- OTC Medicine Bottle (Left) -->
  <g filter="url(#shadow_pharma)">
    <!-- Bottle Body -->
    <rect x="100" y="85" width="75" height="110" rx="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <!-- Safety Cap -->
    <rect x="110" y="60" width="55" height="27" rx="5" fill="#0B103A"/>
    <line x1="110" y1="73" x2="165" y2="73" stroke="#334155" stroke-width="1"/>
    
    <!-- Rx / OTC Label -->
    <rect x="106" y="105" width="63" height="75" rx="3" fill="#FFFFFF"/>
    <!-- Medical Cross Badge on Label -->
    <rect x="127" y="117" width="20" height="20" rx="4" fill="#EBF6EC"/>
    <path d="M137 122V132M132 127H142" stroke="#2E7032" stroke-width="2.5" stroke-linecap="round"/>
    
    <!-- Text Lines -->
    <rect x="116" y="145" width="43" height="6" rx="2" fill="#0B103A"/>
    <rect x="116" y="156" width="35" height="4" rx="2" fill="#64748B"/>
    <rect x="116" y="164" width="28" height="3" rx="1.5" fill="#94A3B8"/>
  </g>

  <!-- Blister Pack (Right) -->
  <g transform="translate(185, 100) rotate(-10)" filter="url(#shadow_pharma)">
    <!-- Silver Foil Pack -->
    <rect x="0" y="0" width="85" height="95" rx="6" fill="url(#blister_foil)" stroke="#94A3B8" stroke-width="1"/>
    <!-- Grid of Tablets -->
    <circle cx="22" cy="24" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <circle cx="63" cy="24" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <circle cx="22" cy="48" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <circle cx="63" cy="48" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <circle cx="22" cy="72" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
    <circle cx="63" cy="72" r="12" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5"/>
  </g>
</svg>
'''

files = {
    "nutraceuticals.svg": nutraceuticals_svg,
    "beauty-cosmetics.svg": beauty_svg,
    "sports-nutrition.svg": sports_svg,
    "health-wellness.svg": wellness_svg,
    "pharmaceuticals.svg": pharma_svg
}

for filename, content in files.items():
    filepath = os.path.join(output_dir, filename)
    with open(filepath, "w") as f:
        f.write(content)
    print(f"Created {filepath}")
