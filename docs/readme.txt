Explanation
-------------------------------
The strip_except allows use of the second parameter of strip_tags to not strip
some tags. 

Installation
-------------------------------

1) Put this extension's folder in the "extension" directory under the root of
   the ezp site.

2) Open the appropriate site.ini and add ActiveExtensions[]=strip_except (in the
   case of the override site.ini) or ActiveAccessExtension[]=strip_except to the
   [ExtensionSettings] block.

3) Usage in templates:
   {$attribute.content.output.output_text|strip_except([tags to ignore]>)}
   i.e. {$this_node.data_map.intro.content.output.output_text|strip_except("<a><i><p><li><ol><ul><b>")

   parameter: tags to ignore

Version history:
-------------------------------
* Release 1: initial release


Disclaimer & Copyright:
-------------------------------
/*
    strip_except template operator for eZ publish 4.x
    Copyright (C) 2010  Steven E. Bailey Contactivity B.V. www.contactivity.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/
