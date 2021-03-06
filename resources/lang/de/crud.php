<?php

return [
    "last_edited" => "Zuletzt editiert <b>:time</b> von <b>:user</b>",
    'fields' => [
        'blocks' => [
            'expand' => 'ausklappen',
            'expand_all' => 'Alle ausklappen',
            'collapse_all' => 'Alle einklappen'
        ],
        'relation' => [
            'goto' => 'zur Verknüpfung',
            'unlink' => 'Verknüpfung aufheben',
            'edit' => 'Verknüpfung bearbeiten',
            'messages' => [
                'confirm_unlink' => 'Bitte bestätigen Sie, dass Sie die Verknüpfung aufheben möchten.',
            ]
        ],
        'wysiwyg' => [
            'new_window' => 'Link in neuem Fenster öffnen'
        ]
    ],
    'meta' => [
        'title_hint' => "Leicht verständlicher sinnvoller Satz. Gibt eine Vorstellung, worum es im Seiteninhalt geht. Maximal :width breit.",
        'description_hint' => "Kurze aber aussagekräftige Inhaltsangabe der Seite. Beinhaltet die wichtigsten Schlüsselwörter des Seiteninhaltes.",
    ]
];
