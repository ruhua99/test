<load file="__PUBLIC__/public.html"/>
<div class="hd_setup">
    <strong>欢迎使用后盾HD框架，通过HD框架手册或登录<a href="http://bbs.houdunwang.com/">后盾论坛</a>学习使用HD框架安装配置</strong>

    <h2>
        <a href="__CONTROL__" class="home">返回安装首页</a>
        <a href="javascript:void(0)" class="home" onclick="window.close();return false;">关闭</a>
        <a href="{|U:'rbac/lock'}" class="home">锁定SETUP应用</a>

    </h2>

    <h2>{$role.title}--权限</h2>
</div>
<div class="setup">
    <form action="{|U:'addaccess'}" method="post">
        <input type="hidden" name="rid" value="{$hd.get.rid}"/>

        <div id="hd_rbac">
            <?php
            foreach($node as $v){
            ?>
            <h1>
                <label>
                    <input type="checkbox" name="node[]" value="{$v['nid']}" class="check"
                <empty value="{$v['rid']}">
                    <noempty/>
                    checked='checked'
                </empty>
                />{$v['title']}<strong>({$v['name']})</strong>
                </label>
            </h1>
            <?php
            if(isset($v['node'])&&is_array($v['node'])){
            foreach($v['node'] as $m){
            ?>
            <table>
                <thead>
                <tr>
                    <th>
                        <label>
                        <input type="checkbox" name="node[]" value="{$m['nid']}" class="check"
                        <empty value="{$m['rid']}">
                            <noempty/>
                            checked='checked'
                        </empty>
                        />{$m['title']}<strong>({$m['name']})</strong>
                        </label>
                    </th>
                </tr>
                </thead>
                <?php
                    if(isset($m['node'])&&!empty($m['node'])){
                    ?>
                <tbody>
                <tr>
                    <td>
                        <ul>
                            <?php
                                foreach($m['node'] as $j){
                                ?>
                            <li>
                                <label>
                                    <input type="checkbox" name="node[]" value="{$j['nid']}" class="check"
                                    <empty value="{$j['rid']}">
                                        <noempty/>
                                        checked='checked'
                                    </empty>
                                    /> {$j['title']}<strong>({$j['name']})</strong>
                                </label>
                            </li>
                            <?php
                                }
                                ?>
                        </ul>
                    </td>
                </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
            <?php
            }
            }
            }
            ?>
        </div>
        <div style="margin-left:20px;margin-top:20px;">
            <input type="submit" value="修改" class="query"/>
        </div>
    </form>
</div>
</body>
</html>
