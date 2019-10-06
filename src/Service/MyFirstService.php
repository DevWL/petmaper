<?php 

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Twig\Environment;

class MyFirstService
{
    /**
     * Autowiring constructor
     *
     * @param Environment $twigEnvironment
     * @param AdapterInterface $cache
     * @param LoggerInterface $logger
     * @return void
     */
    public function __construct(Environment $twigEnvironment, AdapterInterface $cache, LoggerInterface $logger)
    {
        $this->twigEnvironment = $twigEnvironment;
        $this->cache = $cache;
        $this->logger = $logger;
    }

    /**
     * Undocumented function
     *
     * @param [type] $slug
     * @param [type] $subject
     * @param [type] $routes
     * @return string - prerendered twig template as html
     */
    public function getAnimalTwig($slug, $subject, $routes)
    {
        // log
        $this->logger->info("################ looking at -- {$slug} -- {$subject['category']} ################");

        // save to, or load from cache
        $item = $this->cache->getItem('animal.html.twig'.md5(json_encode($subject)));
        if(!$item->isHit()) {
            $item->set($this->twigEnvironment->render('animal.html.twig', 
            [
                "slug" => strtoupper($slug),
                "subject" => $subject,
                "routes" => $routes
            ]
            ));
            $this->cache->save($item);
        }

        $html = $item->get();
        return $html;
    }

}
