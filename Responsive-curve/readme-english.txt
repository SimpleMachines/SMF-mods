[center][color=purple][size=5][b]Responsive Curve for SMF 2.0.x[/b][/size][/color][/center]


[color=purple][b][size=10pt]License[/size][/b][/color]
[code]
Copyright (c) 2015, Simple Machines
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
    * Neither the name of the <organization> nor the
      names of its contributors may be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
[/code]


[color=purple][b][size=10pt]Included images[/size][/b][/color]
Fugue Icons | © 2012 Yusuke Kamiyamane | These icons are licensed under a Creative Commons Attribution 3.0 License


[color=purple][b][size=10pt]Compatibility[/size][/b][/color]
SMF 2.0.x


[color=purple][b][size=10pt]Description[/size][/b][/color] 
This MODification adds a basic responsive layout to SMF 2.0.x


[color=purple][b][size=10pt]Installation Information[/size][/b][/color]
The Package Manager should work in most cases, if you have problems installing please use the discussion topic as well as the [url=http://wiki.simplemachines.org/smf/Manual_installation_of_mods]Manual Installation of Mods[/url] wiki page. 


[color=purple][b][size=10pt]Change Log[/size][/b][/color]
[size=8pt]
[b]Version 1.0.1 - May 16 2018[/b]
! Play nicely with maps! (iFrames should be limited at 100% max-width for mobile devices)
! Login & Search (top) buttons/inputs should be bigger now.
! Give more space to post... none likes to stay too close (Posts (.inner) has more padding now)
! Margin of buttons now controlled by almighty parent li... (On buttonlist, a element has 0 margin and all spacing handled by upper li element)
! Structure changes means we don't have to show this also saves space for actual topic title (Author text on topic display now hidden by default)
! Admin menu was too short to reach 3rd level menu... Admin menu's sub element's width increased to 75% (was 51%)
(Developer note; it still requires some testing on real usage feedback is most welcome as always)
! Quick tasks doubleganker removed from 720p settings, it should flow freely now on... Long live the QuickTasks! (Hardlimited version of #quick_tasks removed from the responsive.css)
! In Core Features page, descriptions are hidden for overflow reasons but no more! Now you can freely read descriptions without scrolling in the area. Also its padding increased for possible overflowing with the icon
! We need space... So ? So... Don't go huge paddings where its not needed (padding on #adm_submenus removed to give more space)
! In admin section, all dt/dd elements got their 100% width to give better UX to users.
(Developer note; this can be bit problem but end result will give users on mobile at admin section huge UX benefits)
! (Cross Fingers) Annoying extra-background on main_menu item issue fixed... it shouldn't be showing the hidden background on them.
! Improvements on mlist (memberlist search)
! Added jQuery & SuperFish for menu to increase UX on mobile.
(Developer note; SuperFish might look small addition to system, it enabled click-to-open menu which greatly increases the mobile capibilities of the menu)
(Note2; This might lead to removing icons (requires official decision) and revert to old text-based)
[b]Version 1.0.0 - March 21 2016[/b]
! Padding of select and imput boxes enlarged to avoid bad UX.
! Admin menu changes to improve its responsiveness.
! fix for main_menu weird background creation on tap/hover.
[b]Version 1.0 Beta 5 - June 11 2015[/b]
! Resolution range decreased to 720px (it was 780px)
! Resolution range decreased to 240px (it was 300px)
! Small margin changes on main_menu (dropmenu) for small devices (240px-640px)
! index_common_stats now hidden due to template styling (for small devices)
! Improvements for iPhone 4 (+earlier) users (now they can see menu if they can't before)
! Keyinfo now back but not fully, posts now showing time_stamp (as requested)
! A dirty fix added for Simple Portal (don't get your hopes up, can be removed before stable release)
! Problem with size on wrapper element fixed (fingers crossed :P)
[b]Version 1.0 Beta 4 - May 8 2015[/b]
! Stats page (action=stats) blank issue fixed and size increased
! Unread topic/posts issue fixed
! Profile stats now has bigger size
! Report to mod box width/height changed on small screen
[b]Version 1.0 Beta 3 - April 23 2015[/b]
! Google test fail problem fixed
! Login button size issue fixed
[b]Version 1.0 Beta 2 - April 20 2015[/b]
! Missing end tag creates XHTML validation error
[b]Version 1.0 Beta 1 - April 16 2015[/b]
- Initial release
[/size]

[color=purple][b][size=10pt]Known Issues[/size][/b][/color]
[size=8pt]
- Member lists are not nice on mobile and breaking responsiveness
- Member search has some hardcoded widths in it so its also breaking things... Bad search!
[/size]