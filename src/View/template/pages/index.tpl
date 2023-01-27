{capture name=content}
    <div class="text-left">
        <p class="lead"><a class="btn btn-outline-success" href="/task/new">Add new task</a></p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col"><a
                        href='/?column=task&sort={if isset($task)}{$task}{else}{$sort}{/if}&page={$current_page}'>Task
                </th>
                <th scope="col"><a
                        href='/?column=name&sort={if isset($name)}{$name}{else}{$sort}{/if}&page={$current_page}'>User</a>
                </th>
                <th scope="col"><a
                        href='/?column=email&sort={if isset($email)}{$email}{else}{$sort}{/if}&page={$current_page}'>Email
                </th>

                <th scope="col">Complete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
        
            {foreach $tasks as $task}
                <tr>
                    <td>{$task.id}</td>
                    {if isset($logged_in) and $logged_in}
                        <td>
                            <a  href="/task/{$task.id}">{$task.task}</a>
                    {else}
                        <td>{$task.task}</td>
                    {/if}
                    <td>{$task.name}</td>
                    <td>{$task.email}</td>

                    <td>{if ($task.complete) } Complete {/if}</td>
                    <td>{if ($task.edit) } edited {/if}</td>
                </tr>
          
            {/foreach}

        </tbody>
    </table>
    {if $page_count > 1}
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {for $foo=1 to $page_count}
                    <li class="page-item {if $foo== $current_page} active {/if}">
                        <a class="page-link" href="/?column={$column}&sort={$sort}&page={$foo}">
                            {$foo}
                        </a>
                    </li>
                {/for}
            </ul>
        </nav>
    {/if}

{/capture}
{include file='default.tpl' mainContent=$smarty.capture.content}