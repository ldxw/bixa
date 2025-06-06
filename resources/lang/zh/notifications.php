<?php

return [
    // 通用标签和按钮
    'all' => '所有通知',
    'mark_all_read' => '全部标记为已读',
    'view_all' => '查看全部',
    'no_notifications' => '暂无通知',
    'no_notifications_message' => '通知到达时，您将在此处看到它们。',
    'notifications' => '通知',
    'loading' => '加载中...',
    'retry' => '重试',
    
    // 分类
    'categories' => [
        'all' => '全部',
        'login' => '登录',
        'hosting' => '主机',
        'tickets' => '工单',
        'ssl' => 'SSL',
        'account' => '账户',
    ],
    
    // 操作按钮
    'actions' => [
        'view' => '查看',
        'view_login_history' => '查看登录历史',
        'view_account' => '查看账户',
        'view_ticket' => '查看工单',
        'view_certificate' => '查看证书',
        'view_profile' => '查看个人资料',
    ],
    
    // 空状态提示
    'empty_states' => [
        'login' => '暂无登录通知',
        'login_message' => '登录通知将显示在此处。',
        'hosting' => '暂无主机通知',
        'hosting_message' => '主机通知将显示在此处。',
        'ticket' => '暂无工单通知',
        'ticket_message' => '工单通知将显示在此处。',
        'ssl' => '暂无 SSL 通知',
        'ssl_message' => 'SSL 通知将显示在此处。',
        'account' => '暂无账户通知',
        'account_message' => '账户通知将显示在此处。',
    ],
    
    // 错误消息
    'errors' => [
        'failed_to_get_count' => '获取未读数量失败',
        'failed_to_get_recent' => '获取最近通知失败',
        'failed_to_mark_read' => '标记通知为已读失败',
        'failed_to_mark_all_read' => '标记所有通知为已读失败',
        'failed_to_load' => '加载通知失败',
    ],
    
    // 成功消息
    'messages' => [
        'marked_as_read' => '通知已标记为已读',
        'all_marked_as_read' => '所有通知已标记为已读',
    ],
    
    // 时间标签
    'time' => [
        'just_now' => '刚刚',
        'seconds_ago' => ':count 秒前',
        'minute_ago' => '1 分钟前',
        'minutes_ago' => ':count 分钟前',
        'hour_ago' => '1 小时前',
        'hours_ago' => ':count 小时前',
        'day_ago' => '1 天前',
        'days_ago' => ':count 天前',
        'week_ago' => '1 周前',
        'weeks_ago' => ':count 周前',
    ],
    
    // 登录通知
    'login' => [
        'title' => '登录成功',
        'content' => '您已从 IP 地址 :ip 成功登录',
        'content_with_location' => '您已从位于 :location 的 IP 地址 :ip 成功登录',
        'content_with_location_and_device' => '您已从位于 :location 的 IP 地址 :ip 使用 :browser 在 :platform (:device_type) 上成功登录',
    ],
    
    // 主机通知
    'hosting' => [
        'created' => [
            'title' => '主机账户已创建',
            'content' => '您的 :domain 主机账户已成功创建。',
        ],
        'suspended' => [
            'title' => '主机账户已暂停',
            'content' => '您的 :domain 主机账户已被暂停。',
        ],
        'reactivated' => [
            'title' => '主机账户已恢复',
            'content' => '您的 :domain 主机账户已恢复使用。',
        ],
        'password_changed' => [
            'title' => '主机密码已更改',
            'content' => '您的 :domain 主机账户密码已更改。',
        ],
        'label_changed' => [
            'title' => '主机标签已更新',
            'content' => '您的 :domain 主机账户标签已更新为 ":label"。',
        ],
    ],
    
    // 工单通知
    'ticket' => [
        'created' => [
            'title' => '工单已创建',
            'content' => '您的工单 # :ticket_id 已成功创建。',
        ],
        'replied' => [
            'title' => '您的工单有新回复',
            'content' => '工作人员 :staff_name 已回复您的工单 # :ticket_id。',
        ],
        'status_changed' => [
            'title' => '工单状态已更改',
            'content' => '您的工单 # :ticket_id 状态已更改为 :status。',
        ],
        'closed' => [
            'title' => '工单已关闭',
            'content' => '您的工单 # :ticket_id 已关闭。',
        ],
    ],
    
    // SSL 通知
    'ssl' => [
        'created' => [
            'title' => 'SSL 证书已创建',
            'content' => '您的 :domain SSL 证书已成功创建。',
        ],
        'activated' => [
            'title' => 'SSL 证书已激活',
            'content' => '您的 :domain SSL 证书已成功激活。',
        ],
        'revoked' => [
            'title' => 'SSL 证书已吊销',
            'content' => '您的 :domain SSL 证书已被吊销。',
        ],
    ],
    
    // 账户通知
    'account' => [
        '2fa_enabled' => [
            'title' => '两步验证已启用',
            'content' => '您的账户已启用两步验证。',
        ],
        '2fa_disabled' => [
            'title' => '两步验证已禁用',
            'content' => '您的账户已禁用两步验证。',
        ],
        'password_changed' => [
            'title' => '密码已更改',
            'content' => '您的账户密码已成功更改。',
        ],
        'profile_updated' => [
            'title' => '个人资料已更新',
            'content' => '您的个人资料信息已成功更新。',
        ],
    ],
];