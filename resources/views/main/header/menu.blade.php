
<aside class="left-off-canvas-menu" style="height: 671px;">
    <ul class="off-canvas-list">
        <li><label style="text-align: center;"><strong>{{__('DashBoard Menu')}}</strong></label></li>

        {{--Here You can include all menus by your order--}}
        {{------------------------------------------------}}
        @role('admin')
        
        @endrole
        {{-------------------------------------------------}}
        {{--Logout--}}
        <li class="last"><a href="{{route('logout')}}"><span>{{__('Log Out')}}</span></a>
        </li>

    </ul>
</aside>