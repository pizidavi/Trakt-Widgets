# Trakt Widgets

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

Possible values: `profile` `watched` `watching` ... _more coming soon_  


### Types

Possible values: `poster` ... _more coming soon_  

**IMPORTANT NOTE** `Profile` View works **only** with `Poster` Type  

---

## Examples

### Posters

#### Profile

![Profile Poster](https://trakt-widgets.herokuapp.com/pizidavi/profile/poster)  

#### Watched 

![Watched Poster](https://trakt-widgets.herokuapp.com/pizidavi/watched/poster)  

#### Watching 

![Watching Poster](https://trakt-widgets.herokuapp.com/pizidavi/watching/poster)  


---

## Credits

- [Trakt API](https://www.trakt.tv)
- [TheMovieDB API](https://www.themoviedb.org)
