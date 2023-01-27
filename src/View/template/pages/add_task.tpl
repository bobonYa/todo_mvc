{capture name=content}


    {if isset($errors) and !empty($errors)}
        {foreach $errors as $error}
            <div class="alert alert-danger" role="alert">
                {$error}
            </div>
            {$error}
        {/foreach}

    {/if}

    <main>


        <div class="row g-5">

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Add new task</h4>
                <form class="needs-validation" novalidate method="POST">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder=""
                                value="{if isset($name)} {$name} {/if}" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="you@example.com"
                                value="{if isset($email)} {$email} {/if}" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Task</label>
                            <input type="text" class="form-control" name="task" placeholder="Call to bank"
                                value="{if isset($task)} {$task} {/if}" required>
                            <div class="invalid-feedback">
                                Please enter your task.
                            </div>
                        </div>





                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit"> Add</button>
                </form>
            </div>
        </div>
    </main>


{/capture}
{include file='default.tpl' mainContent=$smarty.capture.content}