# Elodin Services

Just another services plugin.

## Functionality
This plugin does the following:
* Registers a content type for "services" with featured images, excerpts, and content area
* Uses a Gutenberg layout for the single-services template
* Registers a taxonomy for "service-categories"
* Registers layouts for use with the [Simple Queries Shortcodes](https://github.com/jonschr/simple-query-shortcodes) plugin
* Includes vanilla styles and javsascript to make each layout functional and simple to style
* Adds default Admin Columns Pro view for the content type
* Uses the WordPress system for updates

## Default Layouts 
### services (default)
A list of services with excerpts. `[loop post_type="services" layout="services" columns="3"]` 

![Screen Shot 2020-05-15 at 2 53 36 PM](https://user-images.githubusercontent.com/2929672/82090877-fdd70780-96bb-11ea-9261-5c3f4d7fcb27.jpg)

### services_slider
A slider of services with featured images and excerpts. `[loop post_type="services" layout="services_slider"]` 

![Screen Shot 2020-05-15 at 2 53 18 PM](https://user-images.githubusercontent.com/2929672/82090848-f1eb4580-96bb-11ea-83e8-1b7357ecc81e.jpg)

### services_photo
A list of services with featured images `[loop post_type="services" layout="services_photo" columns="3"]`

![Screen Shot 2020-05-15 at 2 53 48 PM](https://user-images.githubusercontent.com/2929672/82090895-06c7d900-96bc-11ea-9ce6-ed6316bf84f1.jpg)

## More sample shortcodes

The shortcodes below show the default types of queries you might want to do, and a few of the options you might want to use. A full list of parameters is available [here](https://github.com/jonschr/simple-query-shortcodes).

* `[loop post_type="services" taxonomy="service-categories" terms="{{the-term-slug}}"]`
* `[loop post_type="services" columns="3"]`
