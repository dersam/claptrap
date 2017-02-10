#Claptrap

request is immutable, response is a single state object mutated by various
transformation methods

final render happens after all transformations are complete
avoid side effects?
- how to handle crud operations?

routes stored in `routes.yml`
route selected with FastRoute - identifies the transform list to use

define transforms to apply
- custom syntax?
- transform has interface
- final assembly based on a renderer

renderer receives all renderable items, responsible for figuring out what to do
