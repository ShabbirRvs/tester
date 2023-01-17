<?php

namespace Rvs\Advancedproduct\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    public function prescriptionCustomOptions()
    {
        $p_c_options = [
            [
                "sort_order" => 38,
                "title" => "Date of Prescription",
                "price_type" => "fixed",
                "price" => "",
                "type" => "field",
                "is_require" => 0
            ],
            [
                "sort_order" => 37,
                "title" => "FileUpload",
                "price_type" => "fixed",
                "price" => "",
                "type" => "file",
                "file_extension" => "png,jpg,pdf",
                "is_require" => 0,
                "values" => $this->upload_presciption_values()
            ], [
                "sort_order" => 1,
                "title" => "Glasses used as",
                "price_type" => "fixed",
                "price" => "",
                "type" => "radio",
                "is_require" => 0,
                "values" => $this->glass_usage_values()
            ], [
                "sort_order" => 12,
                "title" => "Lens Package",
                "price_type" => "fixed",
                "price" => "",
                "type" => "radio",
                "is_require" => 0,
                "values" => $this->lens_package_values()
            ], [
                "sort_order" => 2,
                "title" => "Prescription Name",
                "price_type" => "fixed",
                "price" => "",
                "type" => "field",
                "is_require" => 0
            ], [
                "sort_order" => 3,
                "title" => "Right Sphere",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getRightSphereValues()
            ], [
                "sort_order" => 4,
                "title" => "Left Sphere",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getLeftSphereValues()
            ], [
                "sort_order" => 5,
                "title" => "PD Sphere",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getPdSphereValues()
            ], [
                "sort_order" => 6,
                "title" => "Near PD Sphere",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getNearPdSphereValues()
            ], [
                "sort_order" => 7,
                "title" => "Right Cylinder",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getRightCylinderValues()
            ], [
                "sort_order" => 8,
                "title" => "Left Cylinder",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getLeftCylinderValues()
            ], [
                "sort_order" => 9,
                "title" => "Right Axis",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getRightAxisValues()
            ], [
                "sort_order" => 10,
                "title" => "Left Axis",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getLeftAxisValues()
            ], [
                "sort_order" => 11,
                "title" => "Right Add",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getRightAddValues()
            ], [
                "sort_order" => 12,
                "title" => "Left Add",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getLeftAddValues()
            ], [
                "sort_order" => 13,
                "title" => "Lens Type",
                "price_type" => "fixed",
                "price" => "",
                "type" => "radio",
                "is_require" => 0,
                "values" => $this->lens_Type_values()
            ], [
                "sort_order" => 15,
                "title" => "Lens Protection",
                "price_type" => "fixed",
                "price" => "",
                "type" => "checkbox",
                "is_require" => 0,
                "values" => $this->lens_Type_hydrophobic()
            ], [
                "sort_order" => 16,
                "title" => "Photo and Sunglass",
                "price_type" => "fixed",
                "price" => "",
                "type" => "radio",
                "is_require" => 0,
                "values" => $this->photo_sun_values()
            ], [
                "sort_order" => 18,
                "title" => "Signature Transitions",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getsignatureTransitionsValues()
            ], [
                "sort_order" => 19,
                "title" => "Dark Tints",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getdarkTintsValues()
            ], [
                "sort_order" => 20,
                "title" => "Gradient Tints",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getgradientTintsValues()
            ], [
                "sort_order" => 21,
                "title" => "Polarised",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getpolarisedValues()
            ], [
                "sort_order" => 23,
                "title" => "Right PD",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getrightPDValues()
            ], [
                "sort_order" => 24,
                "title" => "Left PD",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->getleftPDValues()
            ], [
                "sort_order" => 25,
                "title" => "READING",
                "price_type" => "fixed",
                "price" => "",
                "type" => "radio",
                "is_require" => 0,
                "values" => $this->near_vision_reading()
            ], [
                "sort_order" => 26,
                "title" => "Choose Strength",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->choose_strength()
            ], [
                "sort_order" => 27,
                "title" => "Add Prism",
                "price_type" => "fixed",
                "price" => "",
                "type" => "checkbox",
                "is_require" => 0,
                "values" => $this->add_prism()
            ], [
                "sort_order" => 28,
                "title" => "Right Prism Horizontal",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->right_prism_horizontal()
            ], [
                "sort_order" => 29,
                "title" => "Right Base Horizontal",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->right_base_horizontal()
            ], [
                "sort_order" => 30,
                "title" => "Right Prism vertical",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->right_prism_vertical()
            ], [
                "sort_order" => 31,
                "title" => "Right Base Vertical",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->right_base_vertical()
            ], [
                "sort_order" => 32,
                "title" => "Left Prism Horizontal",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->left_prism_horizontal()
            ], [
                "sort_order" => 33,
                "title" => "Left Base Horizontal",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->left_base_horizontal()
            ], [
                "sort_order" => 34,
                "title" => "Left Prism vertical",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->left_prism_vertical()
            ], [
                "sort_order" => 35,
                "title" => "Left Base Vertical",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->left_base_vertical()
            ], [
                "sort_order" => 36,
                "title" => "Digital Block",
                "price_type" => "fixed",
                "price" => "",
                "type" => "checkbox",
                "is_require" => 0,
                "values" => $this->lens_Type_digital()
            ]

        ];

        return $p_c_options;
    }

    public function contactLensOptions()
    {
        $c_l_options = [
            [
                "sort_order" => 39,
                "title" => "Eye",
                "price_type" => "fixed",
                "price" => "",
                "type" => "checkbox",
                "is_require" => 0,
                "values" => $this->Contact_Lens()
            ], [
                "sort_order" => 40,
                "title" => "Power Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->power_lens_right()
            ], [
                "sort_order" => 41,
                "title" => "Power Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->power_lens_left()
            ], [
                "sort_order" => 42,
                "title" => "Power",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->power_lens()
            ], [
                "sort_order" => 43,
                "title" => "Base Curve Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->base_curveright()
            ], [
                "sort_order" => 44,
                "title" => "Base Curve Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->base_curveleft()
            ], [
                "sort_order" => 45,
                "title" => "Base Curve",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->base_curve()
            ], [
                "sort_order" => 46,
                "title" => "Diameter Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->diameterright()
            ], [
                "sort_order" => 47,
                "title" => "Diameter Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->diameterleft()
            ], [
                "sort_order" => 48,
                "title" => "Diameter",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->diameter()
            ], [
                "sort_order" => 49,
                "title" => "Cylinder Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->cylinder_right()
            ], [
                "sort_order" => 50,
                "title" => "Cylinder Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->cylinder_left()
            ], [
                "sort_order" => 51,
                "title" => "Cylinder",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->cylinder()
            ], [
                "sort_order" => 52,
                "title" => "Axis Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->axis_right()
            ], [
                "sort_order" => 53,
                "title" => "Axis Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->axis_left()
            ], [
                "sort_order" => 54,
                "title" => "Axis",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->axis()
            ], [
                "sort_order" => 55,
                "title" => "Color Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->color_right()
            ], [
                "sort_order" => 56,
                "title" => "Color Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->color_left()
            ], [
                "sort_order" => 57,
                "title" => "Color",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->color()
            ], [
                "sort_order" => 58,
                "title" => "Boxes Right",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->quant_of_boxes_right()
            ], [
                "sort_order" => 59,
                "title" => "Boxes Left",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->quant_of_boxes_left()
            ], [
                "sort_order" => 60,
                "title" => "Boxes",
                "price_type" => "fixed",
                "price" => "",
                "type" => "drop_down",
                "is_require" => 0,
                "values" => $this->quant_of_boxes()
            ], [
                "sort_order" => 61,
                "title" => "Contact Lens Prescription",
                "price_type" => "fixed",
                "price" => "",
                "type" => "file",
                "file_extension" => "png,jpg,jpeg,pdf,csv",
                "is_require" => 0,
                "values" => $this->upload_contact_lens()
            ]
        ];

        return $c_l_options;
    }

    public function base_curve()
    {

        $base_curve = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '8.3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '8.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '8.7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $base_curve;
    }

    public function base_curveleft()
    {

        $base_curveleft = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '8.3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '8.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '8.7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $base_curveleft;
    }

    public function base_curveright()
    {

        $base_curveright = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '8.3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '8.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '8.7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $base_curveright;
    }

    public function diameter()
    {

        $diameter = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '13.8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '14.2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '14.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $diameter;
    }

    public function diameterright()
    {

        $diameterright = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '13.8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '14.2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '14.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $diameterright;
    }

    public function diameterleft()
    {

        $diameterleft = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '13.8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '14.2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '14.5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]


        ];
        return $diameterleft;
    }


    public function power_lens()
    {

        $power_lens = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ]

        ];
        return $power_lens;
    }


    public function cylinder()
    {

        $cylinder = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '-1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ]

        ];
        return $cylinder;
    }

    public function axis()
    {
        $start = 10;
        $finish = 180;
        $step = 10;
        $counter = 1;

        $result = [];
        $result[] = [
            'record_id' => 1,
            'title' => 'Please Select',
            'price' => 0,
            'price_type' => "fixed",
            'sort_order' => 0,
            'is_delete' => 0
        ];

        for ($i = $start; $i<=$finish; $i+=$step)
        {
            $counter++;
            $result[] = [
                'record_id' => $counter,
                'title' => $i,
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => $counter,
                'is_delete' => 0
            ];
        }

        return $result;
    }

    public function color()
    {

        $color = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => 'Brilliant Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => 'Gemstone Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => 'Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => 'Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => 'Honey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => 'Pure Hazel',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => 'Sterling Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => 'True Sapphire',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => 'Turquoise',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ]

        ];
        return $color;
    }

    public function upload_contact_lens()
    {
        $upload_contact_lens = [
            [
                'title' => 'Contact Lens Prescription',
                'type' => 'file',
                'is_require' => 0,
                'file_extension' => 'png,jpg,jpeg,pdf,csv'
            ]
        ];

        return $upload_contact_lens;
    }

    public function color_right()
    {

        $color_right = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => 'Brilliant Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => 'Gemstone Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => 'Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => 'Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => 'Honey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => 'Pure Hazel',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => 'Sterling Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => 'True Sapphire',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => 'Turquoise',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ]

        ];
        return $color_right;
    }

    public function color_left()
    {

        $color_left = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => 'Brilliant Blue',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => 'Gemstone Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => 'Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => 'Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => 'Honey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => 'Pure Hazel',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => 'Sterling Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => 'True Sapphire',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => 'Turquoise',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ]

        ];
        return $color_left;
    }

    public function axis_right()
    {

        return $this->axis();
    }

    public function axis_left()
    {
        return $this->axis();
    }

    public function quant_of_boxes_right()
    {

        $quant_of_boxes_right = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '4',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '6',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '9',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '10',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '11',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '12',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ]

        ];
        return $quant_of_boxes_right;
    }

    public function quant_of_boxes_left()
    {

        $quant_of_boxes_left = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '4',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '6',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '9',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '10',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '11',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '12',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ]

        ];
        return $quant_of_boxes_left;
    }

    public function quant_of_boxes()
    {

        $quant_of_boxes = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '4',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '5',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '6',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '7',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '8',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '9',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '10',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '11',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '12',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ]

        ];
        return $quant_of_boxes;
    }

    public function cylinder_right()
    {

        $cylinder_right = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '-1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ]

        ];
        return $cylinder_right;
    }

    public function cylinder_left()
    {

        $cylinder_left = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '-1',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-2',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-3',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ]

        ];
        return $cylinder_left;
    }

    public function power_lens_right()
    {

        $power_lens_right = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ]

        ];
        return $power_lens_right;
    }

    public function power_lens_left()
    {

        $power_lens_left = [
            [
                'record_id' => 1,
                'title' => 'Please Select',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ]

        ];
        return $power_lens_left;
    }

    public function Contact_Lens()
    {

        $Contact_Lens = [
            [
                'record_id' => 0,
                'title' => 'Left',
                'price' => 0.00,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 0,
                'title' => 'Right',
                'price' => 0.00,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $Contact_Lens;
    }

    public function upload_presciption_values()
    {
        $upload_presciption_values = [
            [
                'title' => 'FileUpload',
                'type' => 'file',
                'is_require' => 0,
                'file_extension' => 'png,jpg,pdf'
            ]
        ];

        return $upload_presciption_values;
    }

    public function glass_usage_values()
    {
        $glass_usage_values = [
            [
                'record_id' => 0,
                'title' => 'DISTANCE',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0,
            ],
            [
                'record_id' => 1,
                'title' => 'READING',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0,
            ],
            [
                'record_id' => 2,
                'title' => 'VARIFOCAL',
                'price' => 139,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0,
            ],
            [
                'record_id' => 3,
                'title' => 'BIFOCAL',
                'price' => 39,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ],
            [
                'record_id' => 4,
                'title' => 'COMPUTER',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ]
        ];

        return $glass_usage_values;
    }

    public function lens_package_values()
    {
        $lens_package_values = [
            [
                'record_id' => 0,
                'title' => 'Silver',
                'price' => 12,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0,
            ],
            [
                'record_id' => 1,
                'title' => 'Gold',
                'price' => 17,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0,
            ],
            [
                'record_id' => 2,
                'title' => 'Platinum',
                'price' => 39,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0,
            ],
            [
                'record_id' => 3,
                'title' => 'Diamond',
                'price' => 80,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ]
        ];

        return $lens_package_values;

    }


    public function lens_type_values()
    {
        $lens_type_values = [
            [
                'record_id' => 0,
                'title' => 'Clear',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0,
            ],
            [
                'record_id' => 1,
                'title' => 'Blue Light Lenses',
                'price' => 40,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0,
            ],
            [
                'record_id' => 2,
                'title' => 'Transitions Light Intelligent Lenses',
                'price' => 59,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0,
            ],
            [
                'record_id' => 3,
                'title' => 'Sunglasses',
                'price' => 20,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ]
        ];

        return $lens_type_values;

    }


    public function getRightSphereValues()
    {
        $right_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '-14.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-13.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-13.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-13.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '-13.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-12.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-12.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-12.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '-12.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '-11.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '-11.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '-11.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '-11.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '-10.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 16,
                'title' => '-10.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ],
            [
                'record_id' => 17,
                'title' => '-10.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 18,
                'is_delete' => 0
            ],
            [
                'record_id' => 18,
                'title' => '-10.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 19,
                'is_delete' => 0
            ],
            [
                'record_id' => 19,
                'title' => '-9.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 20,
                'is_delete' => 0
            ],
            [
                'record_id' => 20,
                'title' => '-9.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 21,
                'is_delete' => 0
            ],
            [
                'record_id' => 21,
                'title' => '-9.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 22,
                'is_delete' => 0
            ],
            [
                'record_id' => 22,
                'title' => '-9.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 23,
                'is_delete' => 0
            ],
            [
                'record_id' => 23,
                'title' => '-8.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 24,
                'is_delete' => 0
            ],
            [
                'record_id' => 24,
                'title' => '-8.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 25,
                'is_delete' => 0
            ],
            [
                'record_id' => 25,
                'title' => '-8.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 26,
                'is_delete' => 0
            ],
            [
                'record_id' => 26,
                'title' => '-8.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 27,
                'is_delete' => 0
            ],
            [
                'record_id' => 27,
                'title' => '-7.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 28,
                'is_delete' => 0
            ],
            [
                'record_id' => 28,
                'title' => '-7.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 29,
                'is_delete' => 0
            ],
            [
                'record_id' => 29,
                'title' => '-7.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 30,
                'is_delete' => 0
            ],
            [
                'record_id' => 30,
                'title' => '-7.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 31,
                'is_delete' => 0
            ],
            [
                'record_id' => 31,
                'title' => '-6.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 32,
                'is_delete' => 0
            ],
            [
                'record_id' => 32,
                'title' => '-6.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 33,
                'is_delete' => 0
            ],
            [
                'record_id' => 33,
                'title' => '-6.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 34,
                'is_delete' => 0
            ],
            [
                'record_id' => 34,
                'title' => '-6.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 35,
                'is_delete' => 0
            ],
            [
                'record_id' => 35,
                'title' => '-5.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 36,
                'is_delete' => 0
            ],
            [
                'record_id' => 36,
                'title' => '-5.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 37,
                'is_delete' => 0
            ],
            [
                'record_id' => 37,
                'title' => '-5.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 38,
                'is_delete' => 0
            ],
            [
                'record_id' => 38,
                'title' => '-5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 39,
                'is_delete' => 0
            ],
            [
                'record_id' => 39,
                'title' => '-4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 40,
                'is_delete' => 0
            ],
            [
                'record_id' => 40,
                'title' => '-4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 41,
                'is_delete' => 0
            ],
            [
                'record_id' => 43,
                'title' => '-4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 44,
                'is_delete' => 0
            ],
            [
                'record_id' => 44,
                'title' => '-4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 45,
                'is_delete' => 0
            ],
            [
                'record_id' => 45,
                'title' => '-3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 46,
                'is_delete' => 0
            ],
            [
                'record_id' => 46,
                'title' => '-3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 47,
                'is_delete' => 0
            ],
            [
                'record_id' => 47,
                'title' => '-3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 48,
                'is_delete' => 0
            ],
            [
                'record_id' => 48,
                'title' => '-3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 49,
                'is_delete' => 0
            ],
            [
                'record_id' => 49,
                'title' => '-2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 50,
                'is_delete' => 0
            ],
            [
                'record_id' => 50,
                'title' => '-2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 51,
                'is_delete' => 0
            ],
            [
                'record_id' => 51,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 52,
                'is_delete' => 0
            ],
            [
                'record_id' => 52,
                'title' => '-2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 53,
                'is_delete' => 0
            ],
            [
                'record_id' => 53,
                'title' => '-1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 54,
                'is_delete' => 0
            ],
            [
                'record_id' => 54,
                'title' => '-1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 55,
                'is_delete' => 0
            ],
            [
                'record_id' => 55,
                'title' => '-1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 56,
                'is_delete' => 0
            ],
            [
                'record_id' => 56,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 57,
                'is_delete' => 0
            ],
            [
                'record_id' => 57,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 58,
                'is_delete' => 0
            ],
            [
                'record_id' => 58,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 59,
                'is_delete' => 0
            ],
            [
                'record_id' => 59,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 60,
                'is_delete' => 0
            ],
            [
                'record_id' => 60,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 61,
                'is_delete' => 0
            ],
            [
                'record_id' => 61,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 62,
                'is_delete' => 0
            ],
            [
                'record_id' => 62,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 63,
                'is_delete' => 0
            ],
            [
                'record_id' => 63,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 64,
                'is_delete' => 0
            ],
            [
                'record_id' => 64,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 65,
                'is_delete' => 0
            ],
            [
                'record_id' => 65,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 66,
                'is_delete' => 0
            ],
            [
                'record_id' => 66,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 67,
                'is_delete' => 0
            ],
            [
                'record_id' => 67,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 68,
                'is_delete' => 0
            ],
            [
                'record_id' => 68,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 69,
                'is_delete' => 0
            ],
            [
                'record_id' => 69,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 70,
                'is_delete' => 0
            ],
            [
                'record_id' => 70,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 71,
                'is_delete' => 0
            ],
            [
                'record_id' => 71,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 72,
                'is_delete' => 0
            ],
            [
                'record_id' => 72,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 73,
                'is_delete' => 0
            ],
            [
                'record_id' => 73,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 74,
                'is_delete' => 0
            ],
            [
                'record_id' => 74,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 75,
                'is_delete' => 0
            ],
            [
                'record_id' => 75,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 76,
                'is_delete' => 0
            ],
            [
                'record_id' => 76,
                'title' => '+4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 77,
                'is_delete' => 0
            ],
            [
                'record_id' => 77,
                'title' => '+4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 78,
                'is_delete' => 0
            ],
            [
                'record_id' => 78,
                'title' => '+4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 79,
                'is_delete' => 0
            ],
            [
                'record_id' => 79,
                'title' => '+5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 80,
                'is_delete' => 0
            ],
            [
                'record_id' => 80,
                'title' => '+5.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 81,
                'is_delete' => 0
            ],
            [
                'record_id' => 81,
                'title' => '+5.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 82,
                'is_delete' => 0
            ],
            [
                'record_id' => 82,
                'title' => '+5.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 83,
                'is_delete' => 0
            ],
            [
                'record_id' => 83,
                'title' => '+6.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 84,
                'is_delete' => 0
            ],
            [
                'record_id' => 84,
                'title' => '+6.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 85,
                'is_delete' => 0
            ],
            [
                'record_id' => 85,
                'title' => '+6.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 86,
                'is_delete' => 0
            ],
            [
                'record_id' => 86,
                'title' => '+6.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 87,
                'is_delete' => 0
            ],
            [
                'record_id' => 87,
                'title' => '+7.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 88,
                'is_delete' => 0
            ],
            [
                'record_id' => 88,
                'title' => '+7.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 89,
                'is_delete' => 0
            ],
            [
                'record_id' => 89,
                'title' => '+7.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 90,
                'is_delete' => 0
            ],
            [
                'record_id' => 90,
                'title' => '+7.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 91,
                'is_delete' => 0
            ],
            [
                'record_id' => 92,
                'title' => '+8.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 93,
                'is_delete' => 0
            ],
            [
                'record_id' => 93,
                'title' => '+8.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 94,
                'is_delete' => 0
            ],
            [
                'record_id' => 94,
                'title' => '+8.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 95,
                'is_delete' => 0
            ],
            [
                'record_id' => 96,
                'title' => '+8.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 97,
                'is_delete' => 0
            ],
            [
                'record_id' => 97,
                'title' => '+9.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 98,
                'is_delete' => 0
            ]


        ];

        return $right_sphere_values;
    }

    public function getLeftSphereValues()
    {
        $left_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '-14.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-13.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-13.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '-13.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '-13.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-12.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-12.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-12.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '-12.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '-11.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '-11.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '-11.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '-11.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '-10.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 16,
                'title' => '-10.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ],
            [
                'record_id' => 17,
                'title' => '-10.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 18,
                'is_delete' => 0
            ],
            [
                'record_id' => 18,
                'title' => '-10.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 19,
                'is_delete' => 0
            ],
            [
                'record_id' => 19,
                'title' => '-9.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 20,
                'is_delete' => 0
            ],
            [
                'record_id' => 20,
                'title' => '-9.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 21,
                'is_delete' => 0
            ],
            [
                'record_id' => 21,
                'title' => '-9.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 22,
                'is_delete' => 0
            ],
            [
                'record_id' => 22,
                'title' => '-9.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 23,
                'is_delete' => 0
            ],
            [
                'record_id' => 23,
                'title' => '-8.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 24,
                'is_delete' => 0
            ],
            [
                'record_id' => 24,
                'title' => '-8.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 25,
                'is_delete' => 0
            ],
            [
                'record_id' => 25,
                'title' => '-8.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 26,
                'is_delete' => 0
            ],
            [
                'record_id' => 26,
                'title' => '-8.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 27,
                'is_delete' => 0
            ],
            [
                'record_id' => 27,
                'title' => '-7.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 28,
                'is_delete' => 0
            ],
            [
                'record_id' => 28,
                'title' => '-7.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 29,
                'is_delete' => 0
            ],
            [
                'record_id' => 29,
                'title' => '-7.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 30,
                'is_delete' => 0
            ],
            [
                'record_id' => 30,
                'title' => '-7.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 31,
                'is_delete' => 0
            ],
            [
                'record_id' => 31,
                'title' => '-6.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 32,
                'is_delete' => 0
            ],
            [
                'record_id' => 32,
                'title' => '-6.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 33,
                'is_delete' => 0
            ],
            [
                'record_id' => 33,
                'title' => '-6.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 34,
                'is_delete' => 0
            ],
            [
                'record_id' => 34,
                'title' => '-6.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 35,
                'is_delete' => 0
            ],
            [
                'record_id' => 35,
                'title' => '-5.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 36,
                'is_delete' => 0
            ],
            [
                'record_id' => 36,
                'title' => '-5.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 37,
                'is_delete' => 0
            ],
            [
                'record_id' => 37,
                'title' => '-5.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 38,
                'is_delete' => 0
            ],
            [
                'record_id' => 38,
                'title' => '-5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 39,
                'is_delete' => 0
            ],
            [
                'record_id' => 39,
                'title' => '-4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 40,
                'is_delete' => 0
            ],
            [
                'record_id' => 40,
                'title' => '-4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 41,
                'is_delete' => 0
            ],
            [
                'record_id' => 43,
                'title' => '-4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 44,
                'is_delete' => 0
            ],
            [
                'record_id' => 44,
                'title' => '-4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 45,
                'is_delete' => 0
            ],
            [
                'record_id' => 45,
                'title' => '-3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 46,
                'is_delete' => 0
            ],
            [
                'record_id' => 46,
                'title' => '-3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 47,
                'is_delete' => 0
            ],
            [
                'record_id' => 47,
                'title' => '-3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 48,
                'is_delete' => 0
            ],
            [
                'record_id' => 48,
                'title' => '-3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 49,
                'is_delete' => 0
            ],
            [
                'record_id' => 49,
                'title' => '-2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 50,
                'is_delete' => 0
            ],
            [
                'record_id' => 50,
                'title' => '-2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 51,
                'is_delete' => 0
            ],
            [
                'record_id' => 51,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 52,
                'is_delete' => 0
            ],
            [
                'record_id' => 52,
                'title' => '-2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 53,
                'is_delete' => 0
            ],
            [
                'record_id' => 53,
                'title' => '-1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 54,
                'is_delete' => 0
            ],
            [
                'record_id' => 54,
                'title' => '-1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 55,
                'is_delete' => 0
            ],
            [
                'record_id' => 55,
                'title' => '-1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 56,
                'is_delete' => 0
            ],
            [
                'record_id' => 56,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 57,
                'is_delete' => 0
            ],
            [
                'record_id' => 57,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 58,
                'is_delete' => 0
            ],
            [
                'record_id' => 58,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 59,
                'is_delete' => 0
            ],
            [
                'record_id' => 59,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 60,
                'is_delete' => 0
            ],
            [
                'record_id' => 60,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 61,
                'is_delete' => 0
            ],
            [
                'record_id' => 61,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 62,
                'is_delete' => 0
            ],
            [
                'record_id' => 62,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 63,
                'is_delete' => 0
            ],
            [
                'record_id' => 63,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 64,
                'is_delete' => 0
            ],
            [
                'record_id' => 64,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 65,
                'is_delete' => 0
            ],
            [
                'record_id' => 65,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 66,
                'is_delete' => 0
            ],
            [
                'record_id' => 66,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 67,
                'is_delete' => 0
            ],
            [
                'record_id' => 67,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 68,
                'is_delete' => 0
            ],
            [
                'record_id' => 68,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 69,
                'is_delete' => 0
            ],
            [
                'record_id' => 69,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 70,
                'is_delete' => 0
            ],
            [
                'record_id' => 70,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 71,
                'is_delete' => 0
            ],
            [
                'record_id' => 71,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 72,
                'is_delete' => 0
            ],
            [
                'record_id' => 72,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 73,
                'is_delete' => 0
            ],
            [
                'record_id' => 73,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 74,
                'is_delete' => 0
            ],
            [
                'record_id' => 74,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 75,
                'is_delete' => 0
            ],
            [
                'record_id' => 75,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 76,
                'is_delete' => 0
            ],
            [
                'record_id' => 76,
                'title' => '+4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 77,
                'is_delete' => 0
            ],
            [
                'record_id' => 77,
                'title' => '+4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 78,
                'is_delete' => 0
            ],
            [
                'record_id' => 78,
                'title' => '+4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 79,
                'is_delete' => 0
            ],
            [
                'record_id' => 79,
                'title' => '+5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 80,
                'is_delete' => 0
            ],
            [
                'record_id' => 80,
                'title' => '+5.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 81,
                'is_delete' => 0
            ],
            [
                'record_id' => 81,
                'title' => '+5.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 82,
                'is_delete' => 0
            ],
            [
                'record_id' => 82,
                'title' => '+5.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 83,
                'is_delete' => 0
            ],
            [
                'record_id' => 83,
                'title' => '+6.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 84,
                'is_delete' => 0
            ],
            [
                'record_id' => 84,
                'title' => '+6.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 85,
                'is_delete' => 0
            ],
            [
                'record_id' => 85,
                'title' => '+6.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 86,
                'is_delete' => 0
            ],
            [
                'record_id' => 86,
                'title' => '+6.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 87,
                'is_delete' => 0
            ],
            [
                'record_id' => 87,
                'title' => '+7.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 88,
                'is_delete' => 0
            ],
            [
                'record_id' => 88,
                'title' => '+7.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 89,
                'is_delete' => 0
            ],
            [
                'record_id' => 89,
                'title' => '+7.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 90,
                'is_delete' => 0
            ],
            [
                'record_id' => 90,
                'title' => '+7.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 91,
                'is_delete' => 0
            ],
            [
                'record_id' => 92,
                'title' => '+8.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 93,
                'is_delete' => 0
            ],
            [
                'record_id' => 93,
                'title' => '+8.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 94,
                'is_delete' => 0
            ],
            [
                'record_id' => 94,
                'title' => '+8.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 95,
                'is_delete' => 0
            ],
            [
                'record_id' => 96,
                'title' => '+8.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 97,
                'is_delete' => 0
            ],
            [
                'record_id' => 97,
                'title' => '+9.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 98,
                'is_delete' => 0
            ]


        ];

        return $left_sphere_values;
    }

    public function getPdSphereValues()
    {
        $pd_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '45',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '46',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '47',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '48',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '49',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '51',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '52',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '53',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '54',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '55',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '56',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '57',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '58',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '59',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 16,
                'title' => '60',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 17,
                'title' => '61',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ],
            [
                'record_id' => 18,
                'title' => '62',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 18,
                'is_delete' => 0
            ],
            [
                'record_id' => 19,
                'title' => '63',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 19,
                'is_delete' => 0
            ],
            [
                'record_id' => 20,
                'title' => '64',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 20,
                'is_delete' => 0
            ],
            [
                'record_id' => 21,
                'title' => '65',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 21,
                'is_delete' => 0
            ],
            [
                'record_id' => 22,
                'title' => '66',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 22,
                'is_delete' => 0
            ],
            [
                'record_id' => 23,
                'title' => '67',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 23,
                'is_delete' => 0
            ],
            [
                'record_id' => 24,
                'title' => '68',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 24,
                'is_delete' => 0
            ],
            [
                'record_id' => 25,
                'title' => '69',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 25,
                'is_delete' => 0
            ],
            [
                'record_id' => 26,
                'title' => '70',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 26,
                'is_delete' => 0
            ],
            [
                'record_id' => 27,
                'title' => '71',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 27,
                'is_delete' => 0
            ],
            [
                'record_id' => 28,
                'title' => '72',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 28,
                'is_delete' => 0
            ],
            [
                'record_id' => 29,
                'title' => '73',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 29,
                'is_delete' => 0
            ],
            [
                'record_id' => 30,
                'title' => '74',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 30,
                'is_delete' => 0
            ],
            [
                'record_id' => 31,
                'title' => '75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 31,
                'is_delete' => 0
            ]
        ];

        return $pd_sphere_values;
    }

    public function getNearPdSphereValues()
    {
        $near_pd_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '40',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '41',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '42',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '43',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '44',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '45',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '46',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '47',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '48',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ]
        ];

        return $near_pd_sphere_values;
    }

    public function getRightCylinderValues()
    {
        $right_cylinder_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '-5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '-3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '-3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '-3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '-2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '-2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '-2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 16,
                'title' => '-1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ],
            [
                'record_id' => 17,
                'title' => '-1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 18,
                'is_delete' => 0
            ],
            [
                'record_id' => 18,
                'title' => '-1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 19,
                'is_delete' => 0
            ],
            [
                'record_id' => 19,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 20,
                'is_delete' => 0
            ],
            [
                'record_id' => 20,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 21,
                'is_delete' => 0
            ],
            [
                'record_id' => 21,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 22,
                'is_delete' => 0
            ],
            [
                'record_id' => 22,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 23,
                'is_delete' => 0
            ],
            [
                'record_id' => 23,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 24,
                'is_delete' => 0
            ],
            [
                'record_id' => 24,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 25,
                'is_delete' => 0
            ],
            [
                'record_id' => 25,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 26,
                'is_delete' => 0
            ],
            [
                'record_id' => 26,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 27,
                'is_delete' => 0
            ],
            [
                'record_id' => 27,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 28,
                'is_delete' => 0
            ],
            [
                'record_id' => 28,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 29,
                'is_delete' => 0
            ],
            [
                'record_id' => 29,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 30,
                'is_delete' => 0
            ],
            [
                'record_id' => 30,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 31,
                'is_delete' => 0
            ],
            [
                'record_id' => 31,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 32,
                'is_delete' => 0
            ],
            [
                'record_id' => 32,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 33,
                'is_delete' => 0
            ],
            [
                'record_id' => 33,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 34,
                'is_delete' => 0
            ],
            [
                'record_id' => 34,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 35,
                'is_delete' => 0
            ],
            [
                'record_id' => 35,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 36,
                'is_delete' => 0
            ],
            [
                'record_id' => 36,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 37,
                'is_delete' => 0
            ],
            [
                'record_id' => 37,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 38,
                'is_delete' => 0
            ],
            [
                'record_id' => 38,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 39,
                'is_delete' => 0
            ],
            [
                'record_id' => 39,
                'title' => '+4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 40,
                'is_delete' => 0
            ],
            [
                'record_id' => 40,
                'title' => '+4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 41,
                'is_delete' => 0
            ],
            [
                'record_id' => 41,
                'title' => '+4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 42,
                'is_delete' => 0
            ],
            [
                'record_id' => 42,
                'title' => '+5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 43,
                'is_delete' => 0
            ]

        ];
        return $right_cylinder_sphere_values;
    }

    public function getLeftCylinderValues()
    {
        $left_cylinder_sphere_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '-5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '-4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '-4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '-4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '-4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '-3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '-3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '-3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '-3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '-2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '-2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '-2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '-2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 16,
                'title' => '-1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ],
            [
                'record_id' => 17,
                'title' => '-1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 18,
                'is_delete' => 0
            ],
            [
                'record_id' => 18,
                'title' => '-1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 19,
                'is_delete' => 0
            ],
            [
                'record_id' => 19,
                'title' => '-1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 20,
                'is_delete' => 0
            ],
            [
                'record_id' => 20,
                'title' => '-0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 21,
                'is_delete' => 0
            ],
            [
                'record_id' => 21,
                'title' => '-0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 22,
                'is_delete' => 0
            ],
            [
                'record_id' => 22,
                'title' => '-0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 23,
                'is_delete' => 0
            ],
            [
                'record_id' => 23,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 24,
                'is_delete' => 0
            ],
            [
                'record_id' => 24,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 25,
                'is_delete' => 0
            ],
            [
                'record_id' => 25,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 26,
                'is_delete' => 0
            ],
            [
                'record_id' => 26,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 27,
                'is_delete' => 0
            ],
            [
                'record_id' => 27,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 28,
                'is_delete' => 0
            ],
            [
                'record_id' => 28,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 29,
                'is_delete' => 0
            ],
            [
                'record_id' => 29,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 30,
                'is_delete' => 0
            ],
            [
                'record_id' => 30,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 31,
                'is_delete' => 0
            ],
            [
                'record_id' => 31,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 32,
                'is_delete' => 0
            ],
            [
                'record_id' => 32,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 33,
                'is_delete' => 0
            ],
            [
                'record_id' => 33,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 34,
                'is_delete' => 0
            ],
            [
                'record_id' => 34,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 35,
                'is_delete' => 0
            ],
            [
                'record_id' => 35,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 36,
                'is_delete' => 0
            ],
            [
                'record_id' => 36,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 37,
                'is_delete' => 0
            ],
            [
                'record_id' => 37,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 38,
                'is_delete' => 0
            ],
            [
                'record_id' => 38,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 39,
                'is_delete' => 0
            ],
            [
                'record_id' => 39,
                'title' => '+4.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 40,
                'is_delete' => 0
            ],
            [
                'record_id' => 40,
                'title' => '+4.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 41,
                'is_delete' => 0
            ],
            [
                'record_id' => 41,
                'title' => '+4.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 42,
                'is_delete' => 0
            ],
            [
                'record_id' => 42,
                'title' => '+5.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 43,
                'is_delete' => 0
            ]
        ];

        return $left_cylinder_sphere_values;
    }

    public function getAxisValues()
    {
        $start = 1;
        $finish = 180;
        $step = 1;
        $counter = 1;

        $result = [];
        $result[] = [
            'record_id' => 1,
            'title' => '0.00',
            'price' => 0,
            'price_type' => "fixed",
            'sort_order' => 1,
            'is_delete' => 0
        ];

        for ($i = $start; $i<=$finish; $i+=$step, $counter++ )
        {
            $result[] = [
                'record_id' => $counter,
                'title' => $i,
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => $counter,
                'is_delete' => 0
            ];
        }

        return $result;
    }

    public function getRightAxisValues()
    {
        return $this->getAxisValues();
    }

    public function getLeftAxisValues()
    {
        return $this->getAxisValues();
    }

    public function getLeftAddValues()
    {
        $left_add_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ]
        ];

        return $left_add_values;
    }

    public function getRightAddValues()
    {
        $right_add_values = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 17,
                'is_delete' => 0
            ]
        ];

        return $right_add_values;
    }


    public function lens_Type_coverage()
    {
        $coverage_value = [
            [
                'record_id' => 0,
                'title' => 'Coverage',
                'price' => 24,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $coverage_value;
    }

    public function lens_Type_hydrophobic()
    {

        $super_hydrophopic = [
            [
                'record_id' => 0,
                'title' => 'Lens Protection',
                'price' => 20,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $super_hydrophopic;


    }


    public function photo_sun_values()
    {
        $photo_sun_values = [
            [
                'record_id' => 1,
                'title' => 'Signature Transitions',
                'price' => 55,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0,
            ],
            [
                'record_id' => 2,
                'title' => 'Dark Tints',
                'price' => 10,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0,
            ],
            [
                'record_id' => 3,
                'title' => 'Gradient Tints',
                'price' => 20,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ],
            [
                'record_id' => 4,
                'title' => 'Polarised',
                'price' => 55,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0,
            ]
        ];

        return $photo_sun_values;
    }

    public function getphotochromicValues()
    {
        $getphotochromicValues = [
            [
                'record_id' => 0,
                'title' => 'Black',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];
        return $getphotochromicValues;

    }

    public function getsignatureTransitionsValues()
    {
        $getsignatureTransitionsValues = [
            [
                'record_id' => 0,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ], [
                'record_id' => 2,
                'title' => 'Grey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $getsignatureTransitionsValues;

    }

    public function getdarkTintsValues()
    {
        $getdarkTintsValues = [
            [
                'record_id' => 0,
                'title' => 'Black',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ], [
                'record_id' => 1,
                'title' => 'Green',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ], [
                'record_id' => 2,
                'title' => 'Gray',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ]

        ];
        return $getdarkTintsValues;
    }

    public function getgradientTintsValues()
    {
        $getgradientTintsValues = [
            [
                'record_id' => 0,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ], [
                'record_id' => 1,
                'title' => 'Grey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ]
        ];
        return $getgradientTintsValues;
    }


    public function getpolarisedValues()
    {
        $getpolarisedValues = [
            [
                'record_id' => 0,
                'title' => 'Brown',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ], [
                'record_id' => 1,
                'title' => 'Grey',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ]
        ];
        return $getpolarisedValues;
    }

    //~ public function getfileValues(){
    //~ $getfileValues =[
    //~ [
    //~ 'record_id'=>0,
    //~ 'title'=>'FileUpload',
    //~ 'price'=>0,
    //~ 'price_type'=>"fixed",
    //~ 'sort_order'=>1,
    //~ 'is_delete'=>0
    //~ ]

    //~ ];
    //~ return $getfileValues;

    //~ }


    public function getPDValues()
    {
        $start = 25;
        $finish = 40;
        $step = .5;
        $counter = 1;

        $result = [];
        $result[] = [
            'record_id' => 0,
            'title' => '0.00',
            'price' => 0,
            'price_type' => "fixed",
            'sort_order' => 1,
            'is_delete' => 0
        ];

        for ($i = $start; $i<=$finish; $i+=$step, $counter++ )
        {
            $result[] = [
                'record_id' => $counter,
                'title' => $i,
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => $counter,
                'is_delete' => 0
            ];
        }

        return $result;
    }

    public function getrightPDValues()
    {
        return $this->getPDValues();
    }

    public function getleftPDValues()
    {
        return $this->getPDValues();
    }


    public function near_vision_reading()
    {
        $near_vision_reading = [
            [
                'record_id' => 0,
                'title' => 'Use My Prescription',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0,
            ],
            [
                'record_id' => 1,
                'title' => 'Reader/Magnification',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0,
            ]

        ];


        return $near_vision_reading;
    }


    public function choose_strength()
    {
        $choose_strength = [
            [
                'record_id' => 0,
                'title' => '+0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '+0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '+0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '+1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '+1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '+1.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '+1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '+2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '+2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '+2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '+2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '+3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '+3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '+3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '+3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ],
            [
                'record_id' => 15,
                'title' => '+4.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 16,
                'is_delete' => 0
            ]

        ];

        return $choose_strength;

    }

    public function add_prism()
    {
        $add_prism = [
            [
                'record_id' => 0,
                'title' => 'Add Prism',
                'price' => 30,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]
        ];

        return $add_prism;
    }

    public function right_prism_horizontal()
    {
        $right_prism_horizontal = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ]

        ];
        return $right_prism_horizontal;
    }

    public function right_base_horizontal()
    {
        $right_base_horizontal = [
            [
                'record_id' => 1,
                'title' => 'In',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Out',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $right_base_horizontal;
    }

    public function right_prism_vertical()
    {
        $right_prism_vertical = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ]
        ];
        return $right_prism_vertical;
    }


    public function right_base_vertical()
    {

        $right_base_vertical = [
            [
                'record_id' => 1,
                'title' => 'Up',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Down',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];
        return $right_base_vertical;
    }

    public function left_prism_horizontal()
    {
        $left_prism_horizontal = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ]

        ];
        return $left_prism_horizontal;
    }

    public function left_base_horizontal()
    {
        $left_base_horizontal = [
            [
                'record_id' => 1,
                'title' => 'In',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Out',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $left_base_horizontal;
    }

    public function left_prism_vertical()
    {
        $left_prism_vertical = [
            [
                'record_id' => 0,
                'title' => '0.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ],
            [
                'record_id' => 1,
                'title' => '0.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 2,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => '0.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 3,
                'is_delete' => 0
            ],
            [
                'record_id' => 3,
                'title' => '0.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 4,
                'is_delete' => 0
            ],
            [
                'record_id' => 4,
                'title' => '1.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 5,
                'is_delete' => 0
            ],
            [
                'record_id' => 5,
                'title' => '1.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 6,
                'is_delete' => 0
            ],
            [
                'record_id' => 6,
                'title' => '1.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 7,
                'is_delete' => 0
            ],
            [
                'record_id' => 7,
                'title' => '2.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 8,
                'is_delete' => 0
            ],
            [
                'record_id' => 8,
                'title' => '2.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 9,
                'is_delete' => 0
            ],
            [
                'record_id' => 9,
                'title' => '2.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 10,
                'is_delete' => 0
            ],
            [
                'record_id' => 10,
                'title' => '2.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 11,
                'is_delete' => 0
            ],
            [
                'record_id' => 11,
                'title' => '3.00',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 12,
                'is_delete' => 0
            ],
            [
                'record_id' => 12,
                'title' => '3.25',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 13,
                'is_delete' => 0
            ],
            [
                'record_id' => 13,
                'title' => '3.50',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 14,
                'is_delete' => 0
            ],
            [
                'record_id' => 14,
                'title' => '3.75',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 15,
                'is_delete' => 0
            ]
        ];
        return $left_prism_vertical;
    }


    public function left_base_vertical()
    {

        $left_base_vertical = [
            [
                'record_id' => 1,
                'title' => 'Up',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 0,
                'is_delete' => 0
            ],
            [
                'record_id' => 2,
                'title' => 'Down',
                'price' => 0,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];
        return $left_base_vertical;
    }


    public function lens_Type_digital()
    {

        $lens_Type_digital = [
            [
                'record_id' => 0,
                'title' => 'Digital Block',
                'price' => 49,
                'price_type' => "fixed",
                'sort_order' => 1,
                'is_delete' => 0
            ]

        ];

        return $lens_Type_digital;
    }

}
