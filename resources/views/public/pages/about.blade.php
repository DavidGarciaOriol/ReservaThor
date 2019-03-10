@extends('layouts.app')

@section('title', 'About ReservaTHOR')

@section('content')
    <h1>About</h1>

    <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#inf1">Info #1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#inf2">Info #2</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Special Info</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#spe1">Special #1</a>
        <a class="dropdown-item" href="#spe2">Special #2</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#add">Additional Info</a>
      </div>
    </li>
  </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <h4 id="inf1">Info #1</h4>
  <p>

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec risus orci. Cras vitae ligula tempor, egestas erat condimentum, faucibus enim. Etiam non imperdiet odio. Aliquam eu quam varius, varius justo porta, vehicula tellus. Pellentesque nec ultricies neque. Proin convallis pretium nisi ut fringilla. Sed nec magna purus. In est nunc, placerat sit amet lectus quis, fringilla venenatis mi. Integer viverra, orci id ornare imperdiet, nulla arcu convallis urna, congue facilisis velit elit vitae neque. Phasellus vitae aliquet ante. Fusce aliquam ipsum felis, eu suscipit urna gravida ac.

    Suspendisse vestibulum nisl nisl, eget condimentum nibh posuere ut. Sed magna metus, feugiat hendrerit interdum ac, posuere ut sem. Nullam scelerisque neque vitae sapien gravida fermentum. Praesent eget justo odio. Donec sagittis ex ex, non cursus lectus condimentum sed. Suspendisse semper dictum neque ut convallis. In dignissim cursus orci pellentesque rutrum. Aliquam non nunc est. Nam feugiat, massa vel rhoncus varius, felis ligula lacinia massa, in vestibulum nulla lacus a tellus. Vivamus vehicula enim enim, euismod tempus diam vehicula nec. Donec elementum molestie ullamcorper. Proin sit amet ornare mi, at bibendum odio. Sed euismod elit id pulvinar efficitur. Proin rhoncus, dui non porttitor ullamcorper, justo turpis mollis lorem, non hendrerit lorem quam in eros. Aenean quis hendrerit est.

    Cras interdum congue velit, nec dignissim neque porttitor id. Curabitur sodales, erat a tristique malesuada, eros dui auctor risus, ut faucibus augue ipsum efficitur sapien. Integer condimentum metus vitae erat maximus, in semper dui eleifend. Praesent in dignissim nisl, vel mattis leo. Cras at fermentum ligula. Nulla placerat posuere mauris congue gravida. Donec eleifend, lorem ut dictum faucibus, est augue mollis massa, et ultricies sem orci sollicitudin mauris. Aenean sagittis accumsan venenatis. Quisque pellentesque finibus lorem, et blandit purus commodo nec. Morbi eu cursus quam. Phasellus porta, eros hendrerit pulvinar porta, ipsum elit consequat risus, quis lobortis dui risus eget est. In eget leo mi. Sed a viverra sem.

    In hac habitasse platea dictumst. Fusce tristique condimentum faucibus. Mauris et rutrum risus. Duis libero eros, suscipit sed fringilla id, dignissim a ligula. Sed consequat ultricies tincidunt. Sed porta turpis sed lacus ornare mollis nec fermentum neque. Vestibulum finibus semper velit at pretium. Maecenas at efficitur odio.

    Proin a est id erat dictum sollicitudin. Ut consequat nisi in mi condimentum commodo. Mauris quis augue felis. Mauris facilisis neque nisl, malesuada aliquet velit pellentesque sed. Aenean maximus ante id magna facilisis, ac malesuada est consectetur. Vestibulum dapibus egestas enim, ut hendrerit turpis egestas id. Duis at mauris in eros cursus vehicula vel vitae enim.
</p>
  <h4 id="inf2">Info #2</h4>
  <p>In hac habitasse platea dictumst. Fusce tristique condimentum faucibus. Mauris et rutrum risus. Duis libero eros, suscipit sed fringilla id, dignissim a ligula. Sed consequat ultricies tincidunt. Sed porta turpis sed lacus ornare mollis nec fermentum neque. Vestibulum finibus semper velit at pretium. Maecenas at efficitur odio.

    Proin a est id erat dictum sollicitudin. Ut consequat nisi in mi condimentum commodo. Mauris quis augue felis. Mauris facilisis neque nisl, malesuada aliquet velit pellentesque sed. Aenean maximus ante id magna facilisis, ac malesuada est consectetur. Vestibulum dapibus egestas enim, ut hendrerit turpis egestas id. Duis at mauris in eros cursus vehicula vel vitae enim.</p>
  <h4 id="spe1">Special #1</h4>
  <p>In hac habitasse platea dictumst. Fusce tristique condimentum faucibus. Mauris et rutrum risus. Duis libero eros, suscipit sed fringilla id, dignissim a ligula. Sed consequat ultricies tincidunt. Sed porta turpis sed lacus ornare mollis nec fermentum neque. Vestibulum finibus semper velit at pretium. Maecenas at efficitur odio.</p>
  <h4 id="spe2">Special #2</h4>
  <p>In hac habitasse platea dictumst. Fusce tristique condimentum faucibus. Mauris et rutrum risus. Duis libero eros, suscipit sed fringilla id, dignissim a ligula. Sed consequat ultricies tincidunt. Sed porta turpis sed lacus ornare mollis nec fermentum neque. Vestibulum finibus semper velit at pretium. Maecenas at efficitur odio.</p>
  <h4 id="add">Additional</h4>
  <p>In hac habitasse platea dictumst. Fusce tristique condimentum faucibus. Mauris et rutrum risus. Duis libero eros, suscipit sed fringilla id, dignissim a ligula. Sed consequat ultricies tincidunt. Sed porta turpis sed lacus ornare mollis nec fermentum neque. Vestibulum finibus semper velit at pretium. Maecenas at efficitur odio.</p>
</div>

@endsection