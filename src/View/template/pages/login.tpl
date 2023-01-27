{capture name=content}

    {if isset($errors) and !empty($errors)}
        {foreach $errors as $error}
            <div class="alert alert-danger" role="alert">
                {$error}
            </div>
            {$error}
        {/foreach}

    {/if}
    
    <form class="form-signin" method="POST">

    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Login</label>
    <input type="text"  class="form-control" placeholder="Login" required="" autofocus="" name="login">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  
  </form>

{/capture}
{include file='default.tpl' mainContent=$smarty.capture.content}