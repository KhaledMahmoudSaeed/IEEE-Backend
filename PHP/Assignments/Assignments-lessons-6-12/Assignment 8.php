<?php
echo '<pre>';
print_r(
    [
        "FrontEnd" => [
            0 => "HTM",
            1 => "CSS",
            "JS" => [
                "Vuejs" => [
                    2 => "v2",
                    3 => "v3"
                ],
                false => "Reactjs",
                true => "Svelte"
            ]
        ],
        "BackEnd" => [
            0 => "PHP",
            1 => "MySQL",
            2 => "Security"
        ],
        0 => "Git",
        1 => "Github",
        "Testing" => [
            0 => "Unit Testing",
            1 => "End TO End",
            2 => "Integration"
        ]
    ]
);
echo '</pre>';