# Trakt Widgets

Trakt Widgets for free users!  

## Usage

Add _&lt;img&gt;_ tag in your HTML:  

URL: https://trakt-widgets.herokuapp.com/user/view/type?language=en  

| Name | Required | Default |Description |
| :--- | :---: | :---: | :--- |
| `user` | **Yes**  |  | Trakt User slug (account must be **not private**) |
| `view` | **Yes** |  | See more [Views](#views) |
| `type` | **Yes** |  | See more [Types](#types) |
| `language` | No | en | Language of texts in images: `en` or `it` |


_Example:_  

``` html
<img src="https://trakt-widgets.herokuapp.com/pizidavi/profile/poster" alt="trakt-widget" />
```

### Views

Possible values: `profile` _More Coming Soon_  


### Types

Possible values: `poster` _More Coming Soon_  

**Note:** _Profile_ View works **only** with _Poster_ Type  

---

## Examples

#### Profile Poster

![Profile Poster](https://trakt-widgets.herokuapp.com/pizidavi/profile/poster)  

