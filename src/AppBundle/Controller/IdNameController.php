<?php
namespace AppBundle\Controller;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Symfonian\Indonesia\AdminBundle\Controller\CrudController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfonian\Indonesia\AdminBundle\Annotation\PageTitle;
use Symfonian\Indonesia\AdminBundle\Annotation\PageDescription;
use Symfonian\Indonesia\AdminBundle\Annotation\FormClass;
use Symfonian\Indonesia\AdminBundle\Annotation\EntityClass;
use Symfonian\Indonesia\AdminBundle\Annotation\GridFields;
use Symfonian\Indonesia\AdminBundle\Annotation\ShowFields;

/**
 * @Route("/contoh")
 *
 * @PageTitle("Sekedar Contoh")
 * @PageDescription("Ini adalah sekedar contoh CRUD menggunakan SIAB")
 * @FormClass("AppBundle\Form\IdNameType")
 * @EntityClass("AppBundle\Entity\IdName")
 * @GridFields({"name"})
 * @ShowFields({"name"})
 */
class IdNameController extends CrudController
{
}
