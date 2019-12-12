<div id="banner" class="container1">

    {assign var="x" value=1}

    <table id="table">

        <thead>
            <tr>
                <th id="ft">name</th>
                <th id="ft">address</th>
                <th id="ft">phone</th>
                <th id="null"></th>
            </tr>
        </thead>
        <tbody>
            {foreach $list as $l}


                <tr>
                    <td>{$l["login"]}</td>
                    <td>{$l["address"]}</td>
                    <td>{$l["phone"]}</td>
                    <td id="but">  
                        <div id="del" onclick="onDelete('{$conf->action_url}deleteUser/{$l['id']}', 'Are you sure?');">
                            <a id="button"><span class="glyphicon glyphicon-remove"></span>  Delete</a>
                        </div>
                    </td>

            <p style="display: none">{$x++}</p>
            </tr>     

        {/foreach}
        </tbody>
    </table>
</div>


<ul class="pagination" >
    <li class="page-item"><a class="page-link"  onclick="nextPage('{$conf->action_url}nextShow/{$prevPage}', 0, 'list');">Previous</a></li>


    {for $i=1 to $pages}

        <li class="page-item"><a class="page-link" onclick="nextPage('{$conf->action_url}nextShow/{$i-1}', {$i}, 'list');">{$i}</a></li>


    {/for}
    <li class="page-item"><a class="page-link"  onclick="nextPage('{$conf->action_url}nextShow/{$nextPage}', {$i}, 'list');">Next</a></li>
</ul>