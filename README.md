# php-todo

Tiny todo app inspired by Gina Trapani's todo-cli, but in php. Also the
class behind can be used in other usages if you like. The cli app also
has a bunch of different ways of using it if you prefere it.

As for now it requires the `php-colors` class but im working on removing
this dependency.

## Help page

    Usage: todo [option] [id] [todo] [priority]
        ?, -h, --help                Displays this help page
        "todo", -t, --todo           Add todo item
        "priority", -p, --priority   Displaying items with priority or add item with priority
        d, -d, --delete              Delete an item
    
    Examples:
        Lists all todos with with ids and priority
        $ todo
        
        List all todos with priority 42
        $ todo 42
        
        Creates a todo with the text "Buy milk" and sets priority to 42. Remember 
        the priority is optional.
        $ todo Buy milk 42
        
        Change item 1's priority to 21.
        $ todo 1 21
        
        Deletes item 1.
        $ todo d 1
