<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/map')]
class MapPickerController extends AbstractController
{
    #[Route('/location-picker', name: 'admin_location_picker')]
    public function locationPicker(): Response
    {
        return $this->render('admin/map/location_picker.html.twig');
    }
}
