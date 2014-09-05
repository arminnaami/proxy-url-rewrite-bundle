<?php
/*
 * Copyright (c) 2014 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of PHPMentorsProxyURLRewriteBundle.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\ProxyURLRewriteBundle\ProxyUrl;

class ProxyUrlFactory
{
    /**
     * @param  string                                             $path
     * @param  string                                             $proxyUrl
     * @return \PHPMentors\ProxyURLRewriteBundle\Routing\ProxyUrl
     */
    public function create($path, $proxyUrl)
    {
        $proxyUrlComponents = parse_url($proxyUrl);

        return new ProxyUrl(
            $path,
            $proxyUrlComponents['path'],
            array_key_exists('host', $proxyUrlComponents) ? $proxyUrlComponents['host'] : null,
            array_key_exists('scheme', $proxyUrlComponents) ? $proxyUrlComponents['scheme'] : null
        );
    }
}
