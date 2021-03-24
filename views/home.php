<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <title>Trakt Widgets</title>
</head>
<body>

  <div class="container my-5">
    <h1 id="trakt-widgets">Trakt-Widgets</h1>
    <p>Trakt Widgets for free users!</p>

    <h2 id="usage">Usage</h2>
    <p>Add image in your HTML with:  </p>
    <p>URL: <a href="#" title="This is only an example.">https://trakt-widgets.herokuapp.com/user/view/type</a>  </p>

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-left">Name</th>
            <th class="text-center">Required</th>
            <th class="text-center">Default</th>
            <th class="text-left">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left"><code>user</code></td>
            <td class="text-center"><strong>Yes</strong></td>
            <td class="text-center"></td>
            <td class="text-left">User of widget</td>
          </tr>
          <tr>
            <td class="text-left"><code>view</code></td>
            <td class="text-center"><strong>Yes</strong></td>
            <td class="text-center"></td>
            <td class="text-left">See more <a href="#views">Views</a></td>
          </tr>
          <tr>
            <td class="text-left"><code>type</code></td>
            <td class="text-center"><strong>Yes</strong></td>
            <td class="text-center"></td>
            <td class="text-left">See more <a href="#types">Types</a></td>
          </tr>
          <tr>
            <td class="text-left"><code>language</code></td>
            <td class="text-center">No</td>
            <td class="text-center">en</td>
            <td class="text-left">Language of text in image: <code>en</code> or <code>it</code></td>
          </tr>
        </tbody>
      </table>
    </div>

    <p><em>Example:</em></p>
    <pre><code class="lang-html">&lt;<span class="hljs-selector-tag">img</span> src=<span class="hljs-string">"https://trakt-widgets.herokuapp.com/pizidavi/profile/poster"</span> alt=<span class="hljs-string">"trakt-widget"</span> /&gt;
    </code></pre>
    
    <h3 id="views">Views</h3>
    <p>Possible values: <code>profile</code> <code>watched</code> <code>watching</code></p>
    
    <h3 id="types">Types</h3>
    <p>Possible values: <code>poster</code> <code>card</code> <code>banner</code> <code>fanart</code> <code>text</code></p>
    <p><strong>IMPORTANT NOTE:</strong> <em>Profile</em> view works only with <em>Poster</em> type</p>

    <hr>

    <h2 id="examples">Examples</h2>

    <h3 class="pt-3">Posters</h3>
    <h4>Profile</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/profile/poster" alt="examples-1" class="img-fluid">
    </p>
    <h4>Watched</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watched/poster" alt="examples-2" class="img-fluid">
    </p>
    <h4>Watching</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watching/poster" alt="examples-3" class="img-fluid">
    </p>

    <h3 class="pt-3">Card</h3>
    <h4>Watched</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watched/card" alt="examples-4" class="img-fluid">
    </p>
    <h4>Watching</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watching/card" alt="examples-5" class="img-fluid">
    </p>

    <h3 class="pt-3">Banner</h3>
    <h4>Watched</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watched/banner" alt="examples-6" class="img-fluid">
    </p>
    <h4>Watching</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watching/banner" alt="examples-7" class="img-fluid">
    </p>

    <h3 class="pt-3">FanArt</h3>
    <h4>Watched</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watched/fanart" alt="examples-8" class="img-fluid">
    </p>
    <h4>Watching</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watching/fanart" alt="examples-9" class="img-fluid">
    </p>

    <h3 class="pt-3">Text</h3>
    <h4>Watched</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watched/text" alt="examples-9" class="img-fluid">
    </p>
    <h4>Watching</h4>
    <p>
      <img src="https://trakt-widgets.herokuapp.com/pizidavi/watching/text" alt="examples-10" class="img-fluid">
    </p>

    <hr>

    <h2 id="credits" class="mt-4">Credits</h2>
    <ul>
      <li><a href="https://trakt.tv">Trakt API</a></li>
      <li><a href="https://www.themoviedb.org">TheMovieDB API</a></li>
      <li><a href="https://fanart.tv/">FanArt API</a></li>
    </ul>

    <h2 id="contact" class="mt-4">
      <a href="https://t.me/pizidavi" target="_blank">Contact Me</a>
    </h2>

  </div>

  <script>
    document.querySelector('[href="#"]').addEventListener('click', function(e) {
      e.preventDefault(); e.stopPropagation();
    });
  </script>
</body>
</html>