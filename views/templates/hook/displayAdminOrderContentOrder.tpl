{*
* osenmpesa
*
* @author 0RS <hi@osen.co.ke>
* @link http://osen.co.ke/
* @copyright Copyright &copy; 2009-2016 Osen Concepts Kenya
* @license    http://www.opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
* @version 2.2.1
*}
<div class="tab-pane" id="up_fields">
    <div class="table-responsive">
        <table class="table" id="up_fields">
            <thead>
            <tr>
                <th>
                    <span class="title_box">{l s='Name' mod='osenmpesa'}</span>
                </th>
                <th>
                    <span class="title_box ">{l s='Value' mod='osenmpesa'}</span>
                </th>
            </tr>
            </thead>
            <tbody>
            {foreach $up_fields as $up_field}
                <tr>
                    <td>{$up_field@key|escape:'html':'UTF-8'}</td>
                    <td>{$up_field|escape:'html':'UTF-8'}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
</div>