#Claptrap

*Allow blocks to define their load order if other blocks are present, but leave
it up to the renderer to determine this. No crosstalk between blocks.*

request is immutable, response is a single state object mutated by various
transformation methods

final render happens after all transformations are complete
avoid side effects?
- how to handle crud operations?

route selected with FastRoute - identifies the transform list to use

define transforms to apply
- custom syntax?
- transform has interface
- final assembly based on a renderer

renderer receives all renderable items, responsible for figuring out what to do

abstract as generic 'task handler' could be cli or web requests
