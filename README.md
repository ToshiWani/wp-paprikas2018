Paprikas 2018
============================

Plugin Dependencies
----------------------------
- Advanced Custom Fields
- Contact Form 7
- Food and Drink Menu
- Instagram Feed
- Meta Slider
- Text Blocks
- TinyMCE Advanced
- Menu Image
- WP Super Cache


Disable Cahce
----------------------------
First, you must disable and clear cache:
- Setting > WP Super Cache
- Click Caching Off
- Click Delete Cache


Add Pages
----------------------------
- Home
- Photos
- Press
- Contact Us


Meta Slider
----------------------------
Setup slider for desktop and mobile

- Desktop
    - Nivo Slider
    - 1920px X 420px
    - CSS Class: "paprikas-2018-slider-desktop" 
- Mobile
    - Nivo Slider
    - 768px X 293px
    - CSS Class: "paprikas-2018-slider-mobile" 


Add Menu (food)
----------------------------
Setup menu sections (e.g. appetizers and desserts)
- Menus > Menu Sections

Setup individual menus
- Menus > Menu Items

Setup Menus
- Dinner
- Lunch

NOTE: Make sure select correct template


Setup Homepage
----------------------------
Settings > Reading > A Static Page


Navigation
----------------------------
Appearance > Menus
- Add navigation in header, footer, and mobile
- Upload and set menu icons


Text Blocks
----------------------------
Add contents
- Business hours
- Contact info
- Follow us


Widgets
----------------------------
Appearance > Widgets

- Top Slider for Desktop
    - Meta Slider : Desktop
    
- Top Slider for Mobile
    - Meta Slider : Mobile

- Header Left
    - Text Blocks : Business hours

- Header Right
    - Text Blocks : Contact info
    - Custom HTML : Credit card icons

- Footer Left
    - Text Blocks : Business hours
    - Text Blocks : Contact info
    - Text Blocks : Follow us

- Footer Right
    - Custom HTML : Google map html

- Front Page Right
    - Text : Enter the shortcode for Instagram plugin "[instagram-feed num=4 cols=2]"


Custom Fields
----------------------------
Configurations:
- Name: Page Fields
- Field Label: Headline
- Field Name: headline
- Field Type: WYSIWYG Editor
- Rules: (Post Type) + (is equal to) + (page)
- Position: High


Enanle Cahce
----------------------------
At the very last step, enable cache.  
- Setting > WP Super Cache
- Click Caching On

