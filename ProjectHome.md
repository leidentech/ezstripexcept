The strip\_except template operator allows use of the second parameter of strip\_tags to not strip some tags.

such as:

`{$article_node.data_map.intro.content.output.output_text|strip_except("<a><b><i>")`}

Note: non-self-closing html tags are incompatible with the shorten template operator.  See the smartshort template operator for more information.