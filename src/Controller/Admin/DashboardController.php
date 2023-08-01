<?php

namespace App\Controller\Admin;

use App\Entity\CompetenceTech;
use App\Entity\ExperiencePro;
use App\Entity\Formations;
use App\Entity\Interets;
use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio Symf');
    }

    public function configureMenuItems(): iterable
    {
        return [
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            yield MenuItem::linkToCrud('CompetenceTech', 'fa-brands fa-symfony', CompetenceTech::class),
            yield MenuItem::linkToCrud('ExperiencePro', 'fa-solid fa-person-digging', ExperiencePro::class),
            yield MenuItem::linkToCrud('Formations', 'fa-solid fa-graduation-cap', Formations::class),
            yield MenuItem::linkToCrud('Interets', 'fa-solid fa-couch', Interets::class),
            yield MenuItem::linkToCrud('Projet', 'fa-solid fa-diagram-project', Projet::class),

        ];
    }
}
