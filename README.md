# Trakt Widgets

> ⚠ Moved to [Trakt-Widgets-2](https://github.com/pizidavi/Trakt-Widgets-2)

Trakt Widgets for free users!  


## Usage

Add _&lt;img&gt;_ tag in your HTML:  

URL: https://trakt-widgets.herokuapp.com/user/view/type?language=en  

| Name | Required | Default |Description |
| :--- | :---: | :---: | :--- |
| `user` | **Yes**  |  | Trakt User slug (_account must be **not private**_) |
| `view` | **Yes** |  | See more [Views](#views) |
| `type` | **Yes** |  | See more [Types](#types) |
| `language` | No | en | Language of texts in images: `en` or `it` |


_Example:_  

``` html
<img src="https://trakt-widgets.herokuapp.com/pizidavi/profile/poster" alt="trakt-widget" />
```

### Views

Possible values: `profile` `watched` `watching`  

**IMPORTANT NOTE** `profile` View works **only** with `poster` Type  

### Types

Possible values: `poster` `card` `banner` `fanart` `text`  

---

## Examples

### Posters

#### Profile

![Profile Poster](https://trakt-widgets.herokuapp.com/pizidavi/profile/poster)  

#### Watched 

![Watched Poster](https://trakt-widgets.herokuapp.com/pizidavi/watched/poster)  

#### Watching 

![Watching Poster](https://trakt-widgets.herokuapp.com/pizidavi/watching/poster)  


### Card

#### Watched 

![Watched Card](https://trakt-widgets.herokuapp.com/pizidavi/watched/card)  

#### Watching 

![Watching Card](https://trakt-widgets.herokuapp.com/pizidavi/watching/card)  


### Banner

#### Watched 

![Watched Banner](https://trakt-widgets.herokuapp.com/pizidavi/watched/banner)  

#### Watching 

![Watching Banner](https://trakt-widgets.herokuapp.com/pizidavi/watching/banner)  


### FanArt

#### Watched 

![Watched FanArt](https://trakt-widgets.herokuapp.com/pizidavi/watched/fanart)  

#### Watching 

![Watching FanArt](https://trakt-widgets.herokuapp.com/pizidavi/watching/fanart)  


### Text

#### Watched 

![Watched Text](https://trakt-widgets.herokuapp.com/pizidavi/watched/text)  

#### Watching 

![Watching Text](https://trakt-widgets.herokuapp.com/pizidavi/watching/text)  

---

## Credits

- [Trakt API](https://trakt.tv)
- [TheMovieDB API](https://www.themoviedb.org)
- [FanArt API](https://fanart.tv)
